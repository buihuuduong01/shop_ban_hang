<?php
session_start();
include_once ("controllers/c_cart.php");
$c_cart = new c_cart();
$c_cart->index();
