<?php
require_once "models/db.php";
function get_products(){
    $sql = "select * from hang_hoa";
    return getData($sql);
}
function get_type(){
    $sql = "select * from loai_hang";
    return getData($sql);
}
function get_binh_luan(){
    $id = $_GET['id_prd'];
    $sql = "select *, binh_luan.id as id_bl from binh_luan inner join khach_hang on binh_luan.id_khach_hang = khach_hang.id 
   inner join hang_hoa on hang_hoa.id=binh_luan.id_hang_hoa where hang_hoa.id='$id'";
    return getData($sql);
}
