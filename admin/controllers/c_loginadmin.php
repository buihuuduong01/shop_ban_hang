<?php

include "../connect/session.php";
session::checkLogin();
include "../connect/database.php";
include "../connect/format.php";

?>

<?php
class c_loginadmin{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function login_admin($adminUser,$adminPass)
    {// kiểm tra xem nhập có hợp lệ không
        $adminUser = $this->fm->validation($adminUser);
        $adminPass = $this->fm->validation($adminPass);

        $adminUser = mysqli_real_escape_string($this->db->link,$adminUser);
        $adminPass = mysqli_real_escape_string($this->db->link,$adminPass);

        if (empty($adminUser)||empty($adminPass)){
            $alert ="<span style='color:red;'>không được để trống";
            return $alert;
        }else{
            $query ="SELECT * FROM tbl_admin WHERE adminUser = '$adminUser'AND '$adminPass' LIMIT 1";
            $result = $this->db->select($query);

            if ($result !=false){
                $value =$result->fetch_assoc();
                Session::set('adminlogin',true);
                Session::set('adminId',$value['adminId']);
                Session::set('adminUser',$value['adminUser']);
                Session::set('adminName',$value['adminName']);
                header('Location:home.php');
            }else{
                $alert="<span style='color:red;'>Tài khoản và mật khẩu không khớp";
                return $alert;
            }
        }
    }

}

