<?php
require_once "models/db.php";
function get_prd_by_id(){
    $id = $_GET['id_prd'];
    $sql = "select *, hang_hoa.id_loai_hang as id_loai_hang from hang_hoa where id = '$id'";
    return getData($sql);
}