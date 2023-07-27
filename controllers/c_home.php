<?php
include_once ("models/m_product.php");

class c_home {
    public function index(){        
        $productModel = new m_product();
        $product_hot = $productModel->getproduct_hotdeals();
        $product_new = $productModel->getproduct_new();
        $product_like = $productModel->getproduct_like();

        $view = "views/home/v_home.php";
        include ("template/frontend/layout.php");
    }
}
