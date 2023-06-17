<?php
session_start();

// Xóa toàn bộ dữ liệu phiên làm việc
session_unset();
session_destroy();

// Chuyển hướng người dùng về trang đăng nhập hoặc trang chưa được xác thực
header("Location:login.php");
exit();
?>