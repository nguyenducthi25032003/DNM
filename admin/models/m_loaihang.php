<?php
require_once ("db.php");
function getLoaiHang(){
    $sql = "select * from loai_hang";
    return getData($sql);
}

function deleteLoaiHang(){
    $id = $_GET['id_lh'];
    $sql = "delete from loai_hang where id = '$id'";
    getData($sql, false);
    header("location: index.php?url=list_loaihang");
}

function addLoaiHang(){
    if (isset($_POST['btn_add'])){
        $id = null;
        $ten_loai = $_POST['ten_loai'];
        $sql = "insert into loai_hang values ('$id', '$ten_loai')";
        getData($sql, false);
        header("location: index.php?url=list_loaihang");
    }
}
function read_loaihang_by_id(){
    $id = $_GET['id_lh'];
    $sql = "select * from loai_hang where id = '$id'";
    return getData($sql);
}
function editLoaiHang(){
    if (isset($_POST['btn_save'])){
        $id = $_GET['id_lh'];
        $ten_loai = $_POST['ten_loai'];
        $sql = "update loai_hang set ten_loai = '$ten_loai' where id = '$id'";
        getData($sql, false);
        header("location: index.php?url=list_loaihang");
    }
}