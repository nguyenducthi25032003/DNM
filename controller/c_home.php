<?php
require_once "models/m_home.php";
function index(){
    $products = get_products();
    $view = "view/home/v_home.php";
    include_once "template/layout.php";
}
