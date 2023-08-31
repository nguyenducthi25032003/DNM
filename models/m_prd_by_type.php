<?php
require_once "models/db.php";
function get_prd_by_type(){
    $id = $_GET['id_type'];
    $sql = "select * from hang_hoa where id_loai_hang = '$id'";
    return getData($sql);

}
