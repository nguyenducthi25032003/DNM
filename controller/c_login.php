<?php
require_once "models/m_login.php";
function check_login(){
    if (isset($_POST['btn_login'])){
        $tai_khoan = $_POST['tai_khoan'];
        $mat_khau = $_POST['mat_khau'];
        $account = getAccount();
//        var_dump($account);
//        die();
        foreach ($account as $value){
            if ($value['tai_khoan'] == $tai_khoan && $value['mat_khau'] == $mat_khau && $value['vai_tro'] == 1){
                $_SESSION['tai_khoan'] = $tai_khoan;
                $_SESSION['admin'] = "admin";
                $_SESSION['id_kh'] = $value['id'];
            }else{
                header("location: index.php?login_error");
            }


            if ($value['tai_khoan'] == $tai_khoan && $value['mat_khau'] == $mat_khau && $value['vai_tro'] == 0){
                $_SESSION['tai_khoan'] = $tai_khoan;
                $_SESSION['user'] = "user";
                $_SESSION['id_kh'] = $value['id'];
            }else{
                header("location: index.php?login_error");
            }
        }
        if(isset($_SESSION['admin'])){
            header("location: admin/index.php?login_done");
        }
        if (isset($_SESSION['user'])){
            header("location: index.php?login_done");
        }

//        if (!isset($_SESSION['tai_khoan'])){
//            header("location: index.php?login_error");
//        }else{
//            header("location: index.php?login_done");
//        }
    }
//    header("location: index.php");
    include ("view/tai_khoan/tai_khoan.php");
}
function dang_ki(){
    sigup();
    $view = "view/tai_khoan/v_singup.php";
    include ("template/layout.php");
}