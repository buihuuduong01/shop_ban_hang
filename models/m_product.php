<?php
include_once "connect/database.php";
include_once "connect/format.php";

class m_product {
    private $db;
    private $fm;

    public function __construct() {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function getproduct_hotdeals() {
        $query = "SELECT * FROM tbl_product WHERE type = '1'";
        $result = $this->db->select($query);
        return $result;
        
    }

    public function getproduct_new() {
       $query = "SELECT * FROM tbl_product WHERE type = '0'";
       $result = $this->db->select($query);
       return $result;
   }


   public function getproduct_like() {
       $query = "SELECT * FROM tbl_product WHERE type = '3'";
       $result = $this->db->select($query);
       return $result;
       
   }

   public function getproduct_details($id){
    {
        $query = "SELECT tbl_product.*, tbl_category.catName, tbl_brand.brandName 
        FROM tbl_product 
        INNER JOIN tbl_brand ON tbl_product.brandId = tbl_brand.brandId
        INNER JOIN tbl_category ON tbl_product.catId = tbl_category.catId 
        WHERE tbl_product.productId = '$id'";

        $result = $this->db->select($query);
        return $result;
    }
    
}
}


?>