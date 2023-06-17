<?php
include("controllers/c_category.php");

$action = $_GET['action'] ?? 'list';

$categoryController = new c_category();

switch ($action) {
    case 'catadd':
        $categoryController->index();
        break;
    case 'catedit':
        $categoryController->edit();
        break;
    case 'catdel':
        $categoryController->delete();
        break;
    case 'catlist':
    default:
        $categoryController->list();
        break;
}
?>
