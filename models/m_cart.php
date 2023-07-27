<?php
include_once "connect/database.php";
include_once "connect/format.php";
//include "connect/session.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class m_cart
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function add_to_cart($quantity, $id)
    {
        $quantity = $this->fm->validation($quantity);
        $quantity = $this->db->link->real_escape_string($quantity);
        $id = $this->db->link->real_escape_string($id);

        $sId = session_id(); 

        // echo '<pre>';
        // print_r($sId);
        // echo  '</pre>';
        // exit();

        $query = "SELECT * FROM tbl_product WHERE productId ='$id'";
        $result = $this->db->select($query)->fetch_assoc();

        $image = $result["image"];
        $price = $result["price"];
        $productName = $result["productName"];

        // kiểm tra sp đã có trong giỏ hàng chưa

       $check_cart_query = "SELECT * FROM tbl_cart WHERE productId = '$id' AND sId = '$sId'";
      $check_cart_result = $this->db->select($check_cart_query);

    if ($check_cart_result->num_rows > 0) {
        $msg = "sản phẩm đã được thêm vào giỏ hàng";
        return $msg;
    } else {
        $query_insert = "INSERT INTO tbl_cart (productId, quantity, sId, image, price, productName) 
        VALUES ('$id', '$quantity', '$sId', '$image', '$price', '$productName' )";
        $insert_cart = $this->db->insert($query_insert);

        if ($insert_cart) {
            header('location: cart.php');
        } else {
            header('location: 404.php');
        }
    }
    }
    public  function  get_product_cart(){
        $sId = session_id();
        $query ="SELECT * FROM tbl_cart WHERE  sId ='$sId'";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_quantity_cart($quantity, $cartId) {
        $quantity = $this->db->link->real_escape_string($quantity);
        $cartId = $this->db->link->real_escape_string($cartId);
        $query = "UPDATE tbl_cart SET
              quantity = '$quantity'
              WHERE cartId = '$cartId'";
        $result = $this->db->update($query);
        if ($result) {
            $msg = "<span class='alert alert-success alert-dismissible fade show'>cập nhật số lượng thành công</span>";
            return $msg;
        } else {
            $msg = "<span class='alert alert-danger alert-dismissible fade show'>cập nhật số lượng không thành công</span>";
            return $msg;
        }
    }

    public function delete_Product_Cart($cartid){
       $cartid = mysqli_real_escape_string($this->db->link,$cartid);

     $query = "DELETE FROM tbl_cart WHERE cartId ='$cartid'";
      $result = $this->db->delete($query);

      if ($result) {
       header('Location: cart.php');

       
        }else {
            $msg = "<span class='alert alert-danger alert-dismissible fade show'>Xóa không thành công</span>";
            return $msg;
        }

  }

  // check cart
  public function check_cart(){
     $sId = session_id();
        $query ="SELECT * FROM tbl_cart WHERE  sId ='$sId'";
        $result = $this->db->select($query);
        return $result;
  }

} 

