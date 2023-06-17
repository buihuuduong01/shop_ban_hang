<?php

include("controllers/c_product.php");

$action = $_GET['action'] ?? 'list';

$productController = new c_product();

switch ($action) {
    case 'productadd':
        $productController->index();
        break;
    case 'productedit':
        $productController->edit();
        break;
    case 'productdel':
        $productController->delete();
        break;
    case 'productlist':
    default:
        $productController->list();
        break;
}
    
?>
