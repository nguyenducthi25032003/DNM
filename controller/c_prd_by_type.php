<?php
require_once ("models/m_prd_by_type.php");
function prd_by_type(){
    $prd_type = get_prd_by_type();
    $view = "view/prd_by_type/v_prd_by_type.php";
    include_once "template/layout.php";
}
