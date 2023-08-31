<?php
require_once "db.php";
function get_binh_luan(){
    $sql = "select *, binh_luan.id as id_bl from binh_luan inner join khach_hang on binh_luan.id_khach_hang = khach_hang.id 
   inner join hang_hoa on hang_hoa.id=binh_luan.id_hang_hoa";
    return getData($sql);
}
function deleteBinhLuan(){
    $id = $_GET['id_bl'];
    $sql = "delete from binh_luan where id = '$id'";
    return getData($sql, false);
}