<?php
include("../connect/database.php");
include("../connect/format.php");
include("models/m_category.php");

class c_category {
    public function index() {
        $cat = new Category();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $catName = $_POST['catName'];
            $insertCat = $cat->insert_Category($catName);
        }

        $view = "views/list_product/v_catadd.php";
        include("template/layout.php");
    }

    public function edit(){

        $cat = new Category();
        if (isset($_GET['catid'])|| $_GET(['catid'])==null){
            $id = $_GET['catid'];
        }
        if ($_SERVER['REQUEST_METHOD']==='POST'){
            $catName = $_POST['catName'];
            $insertCat = $cat->update_category($catName,$id);
        }

        $view = "views/list_product/v_catedit.php";
        include ("template/layout.php");
    }



    public function delete() {
        $cat = new Category();
        if (isset($_GET['delid'])) {
            $id = $_GET['delid'];
            $delcat = $cat->delete_Category($id);
        }

        $view = "views/list_product/v_catadd.php";
        include("template/layout.php");
    }

    public function list() {
        $cat = new Category();
        $view = "views/list_product/v_catlist.php";
        include("template/layout.php");
    }
}
?>