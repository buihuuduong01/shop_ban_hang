<?php

class c_product
{
    public function index()
    {
     
        include("models/m_product.php");
       
        $productModel = new m_product();
     
        if (!isset($_GET['proid']) || $_GET['proid'] == null) {
            echo "<script>window.location='404.php'</script>";
        } else {
            $id = $_GET['proid'];
        }
         include("models/m_cart.php");
            $ct = new m_cart();
        if ($_SERVER['REQUEST_METHOD'] =="POST" && isset($_POST['add-cart'])) {
            $quantity = $_POST['quantity'];
            $AddToCart = $ct->add_to_cart($quantity, $id);
        }
       
        $product_detail = $productModel->getproduct_details($id);
        $view = "views/product/v_product.php";
        include("template/frontend/layout.php");
    }
}
     