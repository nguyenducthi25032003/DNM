<?php
require_once "models/m_binh_luan.php";
function binh_luan(){
    $binh_luan = get_binh_luan();
    $view = "view/binhluan/v_binh_luan.php";
    include ("templates/layout.php");
}
function delete_binhLuan(){
    deleteBinhLuan();
    header("location: index.php?url=binh_luan&done");
}

