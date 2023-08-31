<?php
require_once "db.php";
function get_khach_hang(){
    $sql = "select * from khach_hang";
    return getData($sql);
}
function deleteKhachHang(){
    $id = $_GET['id_kh'];
    $sql = "delete from khach_hang where id = '$id'";
    getData($sql, false);
    header("location: index.php?url=list_khach_hang");
}