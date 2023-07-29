<?php

include_once"connect/database.php";
include_once"connect/format.php";

class m_shop {
    private $db;
    private $fm;

    public function __construct() {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function get_product_shop($id){
        $query = "SELECT * FROM tbl_product WHERE catId='$id'ORDER BY catId DESC LIMIT 8";
        $result = $this->db->select($query);
        return $result;
    }
    // hiển thị danh mục
    public function show_category(){
      $query = "SELECT * FROM tbl_category ORDER BY catId DESC";
        $result = $this->db->select($query);
        return $result;
}
}
