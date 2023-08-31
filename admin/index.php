<?php
@session_start();
require_once ("controller/c_home.php");
require_once ("controller/c_loaihang.php");
require_once ("controller/c_hanghoa.php");
require_once ("controller/c_user.php");
require_once ("controller/c_binh_luan.php");

if (isset($_SESSION['admin']) && isset($_GET['login_done'])){
    $admin = $_SESSION['tai_khoan'];
    echo "<script>alert(`Xin chào ${admin}`)</script>";
}
if (isset($_GET['done'])){
    echo "<script>alert(`Thành công!`)</script>";
}

$url = isset($_GET['url']) ? $_GET['url'] : "/"; //lấy trên thanh url
switch ($url){
    case "/":
        echo c_home();
        break;

        //hàng hóa
    case "list_hanghoa":
        echo list_hanghoa();
        break;
    case "del_hh":
        echo delete_hh();
        break;
    case "add_hh":
        echo add_hh();
        break;
    case "edit_hh":
        echo edit_hh();
        break;

        //Loại hàng
    case "list_loaihang":
        echo list_loaiHang();
        break;
    case "del_lh":
        echo delete_loaiHang();
        break;
    case "add_lh":
        echo add_loaiHang();
        break;
    case "edit_lh":
        echo edit_loaiHang();
        break;
        //người dùng
    case "list_khach_hang";
        echo list_khach_hang();
        break;
    case "del_user":
        echo delete_khachHang();
        break;
    case "log-out":
        session_destroy();
        header("location: http://localhost/Duanmau/index.php");
        break;
    case "binh_luan":
        echo binh_luan();
        break;
    case "del_bl":
        echo delete_binhLuan();
        break;
}



