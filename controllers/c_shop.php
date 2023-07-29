<?php
class c_shop {
    public function index(){

        include"models/m_shop.php";
        // kiểm tra có id phù hợp k
                 if (!isset($_GET['catId']) || $_GET['catId'] == null) {
            echo "<script>window.location='404.php'</script>";
        } else {
            $id = $_GET['catId']; 
        }
        
        $shop = new m_shop();
        // lấy sản phẩm
        $productbyshop = $shop ->get_product_shop($id);

        // hiển thị danh mục
        $showcate = $shop ->show_category();


        $view ="views/shop/v_shop.php";
        include ("template/frontend/layout.php");

    }
}