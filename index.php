<?php
@session_start();
if (isset($_GET['login_done'])){
    $tai_khoan = $_SESSION['tai_khoan'];
    echo "<script>alert(`Xin chao ${tai_khoan}`)</script>";
}
if (isset($_GET['login_error'])){
    echo "<script>alert('Dang nhap that bai')</script>";
}
if (isset($_GET['signup_done'])){
    echo "<script>alert('Đăng kí thành công!')</script>";
}



$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url){
    case "/":
        require_once "controller/c_home.php";
        echo index();
        break;
    case "products_details":
        require_once "controller/c_products.php";
        prd_details();
        break;
    case "prd_by_type":
        require_once "controller/c_prd_by_type.php";
        echo prd_by_type();
        break;
    case "login":
        require_once ("controller/c_login.php");
        echo check_login();
        break;
    case "logout":
        session_destroy();
        header("location: index.php");
        break;
    case "sigup":
        require_once ("controller/c_login.php");
        dang_ki();
        break;
   case "comment":
        require_once "view/comment/v_binh_luan.php";
        echo binh_luan();
        break;
   case "add_bl";
        require_once "controller/c_binh_luan.php";
        echo them_binh_luan();
        break;
}
