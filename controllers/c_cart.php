<?php
//include "connect/session.php";
class c_cart {
    public function index(){
     include("models/m_cart.php");
     $ct = new m_cart();
     $get_product_cart = $ct->get_product_cart();
     $check_cart = $ct->check_cart();
// xóa giỏ hàng 
     if (isset($_GET['cartid'])) {
        $cartid = $_GET['cartid'];
        $cartdel = $ct->delete_Product_Cart($cartid);
    }
       // cập nhật giỏ hàng 
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
        if (isset($_POST['cartId']) && isset($_POST['quantity'])) {
            $cartId = $_POST['cartId'];
            $quantity = $_POST['quantity'];
            $UpdateQuantityCart = $ct->update_quantity_cart($quantity, $cartId);
// xử lý khi số lượng sản phẩm =0
            if ($quantity<=0) {
               $cartdel = $ct->delete_Product_Cart($cartId);
           }
       }
//
//        if (!isset($_GET['id'])) {
//            echo "<meta http-equiv='refresh' content='0;URL=?id=live'>";
//        }

   }


   $view ="views/cart/v_cart.php";
   include ("template/frontend/layout.php");

}
}