<?php
include("controllers/c_brand.php");

$action = $_GET['action'] ?? 'list';

$brandController = new c_brand();

switch ($action) {
    case 'brandadd':
        $brandController->index();
        break;
    case 'brandedit':
        $brandController->edit();
        break;
    case 'branddel':
        $brandController->delete();
        break;
    case 'brandlist':
    default:
        $brandController->list();
        break;
}
?>
