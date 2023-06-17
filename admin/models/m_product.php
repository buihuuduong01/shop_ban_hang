<?php

include_once("../connect/database.php");
include_once("../connect/format.php");

class Product
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function insert_Product($data, $files)
    {
        // $catName = $this->fm->validation($catName);
        $productName = $this->db->link->real_escape_string($data['productName']);
        $brand = $this->db->link->real_escape_string($data['brand']);
        $category = $this->db->link->real_escape_string($data['category']);
        $description = $this->db->link->real_escape_string($data['description']);
        $price = $this->db->link->real_escape_string($data['price']);
        $type = $this->db->link->real_escape_string($data['type']);
        // kiểm tra và xử lý hình ảnh rồi lưu vào folder upload
        $permited = array('jpg', 'jpeg', 'png', 'tiff', 'webp');
        $file_name =pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name'];
      
        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()),0,10).'.'.$file_ext;
        $uploaded_image = "uploads/".$unique_image;
        echo  $uploaded_image;
        if ($productName == "" || $brand == "" || $category == "" || $description == "" || $price == "" || $type == "" || $file_name == "") {
            $alert = "<span class='error'>Không được để trống</span>";
        } else {
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_product (productName,brandId,catId,description,price,type,image) VALUES ('$productName','$brand','$category','$description','$price','$type',' $unique_image')";
            $result = $this->db->insert($query);

            if ($result) {
                $alert = "<span class='success'>Thêm thành công</span>";
            } else {
                $alert = "<span class='error'>Thêm không thành công</span>";
            }
        }

        return $alert;
    }

    public function show_Product()
    {
        $query = "SELECT tbl_product.*, tbl_category.catName, tbl_brand.brandName 
              FROM tbl_product 
              INNER JOIN tbl_brand ON tbl_product.brandId = tbl_brand.brandId
              INNER JOIN tbl_category ON tbl_product.catId = tbl_category.catId 
              ORDER BY tbl_product.productId DESC";

        // $query = "SELECT * FROM tbl_product ORDER BY productId DESC";

        $result = $this->db->select($query);
        return $result;
    }


    public function getProductById($id)
    {
        $query = "SELECT * FROM tbl_product WHERE productId='$id'";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_Product($data, $file, $id)
    {
        {
            $productName = $this->db->link->real_escape_string($data['productName']);
            $brand = $this->db->link->real_escape_string($data['brand']);
            $category = $this->db->link->real_escape_string($data['category']);
            $description = $this->db->link->real_escape_string($data['description']);
            $price = $this->db->link->real_escape_string($data['price']);
            $type = $this->db->link->real_escape_string($data['type']);
            // kiểm tra và xử lý hình ảnh rồi lưu vào folder upload
            $permited = array('jpg', 'jpeg', 'png', 'tiff', 'webp');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0,10) . '.' . $file_ext;
            $uploaded_image = "uploads/" . $unique_image;

            if ($productName == "" || $brand == "" || $category == "" || $description == "" || $price == "" || $type == "") {
                $alert = "<span class='success'>hình ảnh nhiều hơn 2mb</span>";
            } else {
                // nếu người dùng chọn ảnh
                if (!empty($file_name)) {
                    if ($file_size > 20480) {
                        echo "<span class='error'>hình ảnh trên 1mb</span>";
                    } elseif (in_array($file_ext, $permited) === false) {
                        // echo "<span class='error'>bạn chỉ được upload 1 hình ảnh:-" (',',$permited)."</span>";
                        $alert = "<span class='success'>bạn chỉ được upload các file:-" . implode(',',
                                $permited) . "</span>";
                        return $alert;
                    }
                    $query = "UPDATE tbl_product SET
                   productName = '$productName' ,
                   brandId = '$brand',
                   catId = '$category',
                   type = '$type',
                   price = '$price',
                   image = '$unique_image',                    
                   description = '$description'
                   WHERE productId = '$id'";
                } else {
                    // nếu người dùng k chọn ảnh
                    $query = "UPDATE tbl_product SET
                   productName = '$productName' ,
                   brandId = '$brand',
                   catId = '$category',
                   type = '$type',
                   price = '$price',                 
                   description = '$description'
                   WHERE productId = '$id'";
                }
            }
            $result = $this->db->update($query);

            if ($result) {
                header('location: http://localhost/shop_ban_hang/admin/product.php?action=productlist');
            } else {
                $alert = "<span class='error'>Cập nhật không thành công</span>";
                return $alert;
            }
        }
    }

    public function delete_Product($id)
    {
        $query = "DELETE FROM tbl_product WHERE productId='$id'";
        $result = $this->db->delete($query);

        if ($result) {
            header('location: http://localhost/shop_ban_hang/admin/product.php?action=productlist');
        } else {
            $alert = "<span class='error'>Xóa không thành công</span>";
            return $alert;
        }
    }
}

?>
