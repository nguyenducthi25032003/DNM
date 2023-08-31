<?php
require_once "models/m_binh_luan.php";
function binh_luan(){
    $comment = get_comment();
    $view = "view/comment/v_binh_luan.php";
    include_once "template/layout.php";
}
function them_binh_luan(){
    add_bl();
    $view = "view/products_details/v_products.php";
    include_once "template/layout.php";
}