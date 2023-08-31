<?php
require_once ("models/m_user.php");
function list_khach_hang(){
    $user = get_khach_hang();
    $view = "view/user/v_nguoi_dung.php";
    include ("templates/layout.php");
}
function delete_khachHang(){
    deleteKhachHang();
}