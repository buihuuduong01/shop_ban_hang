<?php
include_once("../connect/database.php");
include_once("../connect/format.php");

class Category {
    private $db;
    private $fm;

    public function __construct() {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function insert_Category($catName) {
        $catName = $this->fm->validation($catName);
        $catName = $this->db->link->real_escape_string($catName);

        if (empty($catName)) {
            $alert = "<span class='error'>Không được để trống</span>";
        } else {
            $query = "INSERT INTO tbl_category (catName) VALUES ('$catName')";
            $result = $this->db->insert($query);

            if ($result) {
                $alert = "<span class='success'>Thêm thành công</span>";
            } else {
                $alert = "<span class='error'>Thêm không thành công</span>";
            }
        }

        return $alert;
    }

    public function show_Category() {
        $query = "SELECT * FROM tbl_category ORDER BY catId DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function getCategoryById($id) {
        $query = "SELECT * FROM tbl_category WHERE catId='$id'";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_Category($catName, $id) {
        $catName = $this->fm->validation($catName);
        $catName = $this->db->link->real_escape_string($catName);
        $id = $this->db->link->real_escape_string($id);

        if (empty($catName)) {
            $alert = "<span class='error'>Không được để trống</span>";
        } else {
            $query = "UPDATE tbl_category SET catName = '$catName' WHERE catId = '$id'";
            $result = $this->db->update($query);

            if ($result) {
                header('location: http://localhost/shop_ban_hang/admin/category.php?action=catlist');
            } else {
                $alert = "<span class='error'>Cập nhật không thành công</span>";
            }
        }

        return $alert;
    }

    public function delete_Category($id) {
        $query = "DELETE FROM tbl_category WHERE catId='$id'";
        $result = $this->db->delete($query);

        if ($result) {
            header('location: http://localhost/shop_ban_hang/admin/category.php?action=catlist');
        } else {
            $alert = "<span class='error'>Xóa không thành công</span>";
        }

        return $alert;
    }
}
?>
