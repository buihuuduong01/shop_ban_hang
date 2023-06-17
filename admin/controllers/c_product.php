<?php
include("../connect/database.php");
include("../connect/format.php");
include ("../admin/models/m_category.php");
include ("../admin/models/m_brand.php");
include ("../admin/models/m_product.php");

class c_product{
    public function index(){
        $cat = new Category();
        $brand = new Brand();
        $product = new Product();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            // vì có hình ảnh nên mới có $_FILES
            $insertProduct = $product->insert_Product($_POST,$_FILES);
        }

        $view = "views/product/v_productadd.php";
        include ("template/layout.php");
    }
    public function edit(){
         $cat = new Category();
        $brand = new Brand();
        $product = new Product();
        
        if (isset($_GET['productid'])|| $_GET(['productid'])==null){
            $id = $_GET['productid'];
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['submit'])) {

            $updateProduct = $product->update_Product($_POST,$_FILES, $id);
        }

        $view = "views/product/v_productedit.php";
        include("template/layout.php");
    }

    public function delete() {
        $product = new Product();
        if (isset($_GET['delid'])) {
            $id = $_GET['delid'];
            $productdel = $product->delete_Product($id);
        }

        $view = "views/product/v_productadd.php";
        include("template/layout.php");
    }

    public function list() {
         $cat = new Category();
        $brand = new Brand();
        $product = new Product();
        $view = "views/product/v_productlist.php";
        include("template/layout.php");
    }
}
