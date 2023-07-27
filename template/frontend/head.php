<?php
include "connect/session.php";
session::init();

?>
 <?php
 include_once 'connect/database.php';
 include_once 'connect/format.php';


 spl_autoload_register(function($classNameUser){
    include_once "models/".$classNameUser.".php";
  
 });
 $db = new Database();
 $fm = new Format();
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || Truemart Responsive Html5 Ecommerce Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="public/layout/img/favicon.ico">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="public/layout/css/font-awesome.min.css">
    <!-- Ionicons css -->
    <link rel="stylesheet" href="public/layout/css/ionicons.min.css">
    <!-- linearicons css -->
    <link rel="stylesheet" href="public/layout/css/linearicons.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="public/layout/css/nice-select.css">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="public/layout/css/jquery.fancybox.css">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="public/layout/css/jquery-ui.min.css">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="public/layout/css/meanmenu.min.css">
    <!-- Nivo slider css -->
    <link rel="stylesheet" href="public/layout/css/nivo-slider.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="public/layout/css/owl.carousel.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="public/layout/css/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="public/layout/css/default.css">
    <!-- Main css -->
    <link rel="stylesheet" href="public/layout/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="public/layout/css/responsive.css">
    <!-- Modernizer js -->
      
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="public/layout/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

</head>