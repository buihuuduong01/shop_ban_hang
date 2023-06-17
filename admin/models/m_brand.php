<?php
include_once("../connect/database.php");
include_once("../connect/format.php");

class Brand {
    private $db;
    private $fm;

    public function __construct() {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function insert_Brand($brandName) {
        $brandName = $this->fm->validation($brandName);
        $brandName = $this->db->link->real_escape_string($brandName);

        if (empty($brandName)) {
            $alert = "<span class='error'>Không được để trống</span>";
        } else {
            $query = "INSERT INTO tbl_brand (brandName) VALUES ('$brandName')";
            $result = $this->db->insert($query);

            if ($result) {
                $alert = "<span class='success'>Thêm thành công</span>";
            } else {
                $alert = "<span class='error'>Thêm không thành công</span>";
            }
        }

        return $alert;
    }

    public function show_Brand() {
        $query = "SELECT * FROM tbl_brand ORDER BY brandId DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function getBrandById($id) {
        $query = "SELECT * FROM tbl_brand WHERE brandId='$id'";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_Brand($brandName, $id) {
        $brandName = $this->fm->validation($brandName);
        $brandName = $this->db->link->real_escape_string($brandName);
        $id = $this->db->link->real_escape_string($id);

        if (empty($brandName)) {
            $alert = "<span class='error'>Không được để trống</span>";
        } else {
            $query = "UPDATE tbl_brand SET brandName = '$brandName' WHERE brandId = '$id'";
            $result = $this->db->update($query);

            if ($result) {
                header('location: http://localhost/shop_ban_hang/admin/brand.php?action=brandlist');
            } else {
                $alert = "<span class='error'>Cập nhật không thành công</span>";
            }
        }

        return $alert;
    }

    public function delete_Brand($id) {
        $query = "DELETE FROM tbl_brand WHERE brandId='$id'";
        $result = $this->db->delete($query);

        if ($result) {
            header('location: http://localhost/shop_ban_hang/admin/brand.php?action=brandlist');
        } else {
            $alert = "<span class='error'>Xóa không thành công</span>";
        }

        return $alert;
    }
}

