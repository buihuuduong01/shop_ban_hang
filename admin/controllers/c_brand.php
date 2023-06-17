<?php
include("../connect/database.php");
include("../connect/format.php");
include("models/m_brand.php");

class c_brand {
    public function index() {
        $brand = new Brand();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $brandName = $_POST['brandName'];
            $insertBrand = $brand->insert_Brand($brandName);
        }

        $view = "views/brand/v_brandadd.php";
        include("template/layout.php");
    }

    public function edit(){

        $brand = new Brand();
        if (isset($_GET['brandid']) || $_GET(['brandid']) == null) {
            $id = $_GET['brandid'];
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $brandName = $_POST['brandName'];
            $insertBrand = $brand->update_Brand($brandName, $id);
        }

        $view = "views/brand/v_brandedit.php";
        include("template/layout.php");
    }

    public function delete() {
        $brand = new Brand();
        if (isset($_GET['delid'])) {
            $id = $_GET['delid'];
            $delBrand = $brand->delete_Brand($id);
        }

        $view = "views/brand/v_brandadd.php";
        include("template/layout.php");
    }

    public function list() {
        $brand = new Brand();
        $view = "views/brand/v_brandlist.php";
        include("template/layout.php");
    }
}
?>
