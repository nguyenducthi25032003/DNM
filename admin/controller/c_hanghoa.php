<?php
require_once ("models/m_hanghoa.php");
function list_hanghoa(){
    $hangHoa = getHangHoa();
    $view = "view/hanghoa/v_hanghoa.php";
    include ("templates/layout.php");
}
function delete_hh(){
    deleteHangHoa();
}
function add_hh(){
    addHangHoa();
    $loai_hang = getLoaiHang();
    $view = "view/hanghoa/v_add_hang_hoa.php";
    include ("templates/layout.php");
}   
function edit_hh(){
    $loai_hang = getLoaiHang();
    $hanghoa_details = read_hanghoa_by_id();
    editHangHoa();
    $view = "view/hanghoa/v_edit_hang_hoa.php";
    include ("templates/layout.php");
}