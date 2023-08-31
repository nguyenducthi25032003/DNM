<?php
require_once "db.php";
function get_comment(){
    $sql = "select * from  binh_luan";
    return getData($sql);
}
function add_bl(){
    if (isset($_POST['btn_add_bl'])){
        $id = null;
        $noi_dung = $_POST['noi_dung'];
        $ngay_bl = date('Y-m-d H:i:s');
        $id_khach_hang = $_SESSION['id_kh'];
        $id_hang_hoa = $_SESSION['id_lh'];
        $sql = "insert into binh_luan values ('$id', '$noi_dung','$ngay_bl','$id_khach_hang','$id_hang_hoa')";
        getData($sql, false);
        header("location: index.php?url=products_details&id_prd=$id_hang_hoa");
    }
}