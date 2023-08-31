<?php
require_once "db.php";
function getAccount(){
    $sql = "select * from khach_hang";
    return getData($sql);
}
function sigup(){
    if (isset($_POST['btn_add'])){
        $id = null;
        $tai_khoan = $_POST['tai_khoan'];
        $mat_khau = $_POST['mat_khau'];
        $email = $_POST['email'];
        $vai_tro = 0;
        $flag = true;
        $accounts = getAccount();
        foreach ( $accounts as $value){
            if($value['tai_khoan'] == $tai_khoan || $value['email'] == $email){
                 $flag = false;

            }
        }
        if( $flag == true ){
            $sql = "insert into khach_hang values ('$id', '$tai_khoan','$mat_khau','$email','$vai_tro')";
            getData($sql, false);
            header("location: index.php?signup_done");
        }else {
            echo "<script>alert('Đăng kí thất bại!')</script>";
        }

    }
}