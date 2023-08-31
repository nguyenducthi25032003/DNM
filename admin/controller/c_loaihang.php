<?php
require_once ("models/m_loaihang.php");
function list_loaiHang(){
    $loaiHang = getLoaiHang();
    $view = "view/loaihang/v_loaihang.php";
    include ("templates/layout.php");
}
function delete_loaiHang(){
    deleteLoaiHang();
}
function add_loaiHang(){
    addLoaiHang();
    $view = "view/loaihang/v_add_loai_hang.php";
    include ("templates/layout.php");
}
function edit_loaiHang(){
    $loaiHang_details = read_loaihang_by_id();
    editLoaiHang();
    $view = "view/loaihang/v_edit_loai_hang.php";
    include ("templates/layout.php");

}