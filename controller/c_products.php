<?php
require_once ("models/m_products.php");
require_once ("models/m_home.php");
function prd_details(){
    $prd_details = get_prd_by_id();
    $products = get_products();
    $view = "view/products_details/v_products.php";
    include_once "template/layout.php";
}
