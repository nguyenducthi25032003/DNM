<?php
require_once ("db.php");
function getHangHoa(){
    $sql = "select *, hang_hoa.id as id_hh from hang_hoa inner join loai_hang on hang_hoa.id_loai_hang = loai_hang.id";
    return getData($sql);
}

function deleteHangHoa(){
    $id = $_GET['id_hh'];
    $sql = "delete from hang_hoa where id='$id'";
    getData($sql, false);
    header("location: index.php?url=list_hanghoa");
}
function addHangHoa(){
    if(isset($_POST['btn_add'])){
        $id = null ;
        $ten_hh = $_POST['ten_hh'];
        $don_gia = $_POST['don_gia'];
        $giam_gia = $_POST['giam_gia'];
        $ngay_nhap = date('Y-m-d H:i:s');
        $id_loai_hang = $_POST['id_loai_hang'];
        $dac_biet = $_POST['dac_biet'];
        $so_luot_xem = $_POST['so_luot_xem'];
        $mo_ta = $_POST['mo_ta'];
        if (isset($_FILES['img'])){
            $allow_upload = true;
            $hinh = $_FILES['img']['name'];
            $target_dir = "public/img/";
            $target_file = $target_dir .$_FILES['img']['name'];
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            $allowTypes = ['jpg', 'png', 'jpeg','jfif'];

            if(!in_array($imageFileType, $allowTypes)){
                echo "<script>alert('Đuôi file không được phép upload')</script>";
                $allow_upload = false;
            }

            if ($allow_upload){
                move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
                $sql = "insert into hang_hoa values ('$id', '$ten_hh', '$don_gia', '$giam_gia','$hinh', '$ngay_nhap', '$id_loai_hang', '$dac_biet', '$so_luot_xem', '$mo_ta')";
                getData($sql, false);
                header("location: index.php?url=list_hanghoa");
            }
        }
    }
}
function read_hanghoa_by_id(){
    $id = $_GET['id_hh'];
    $sql = "select *, hang_hoa.id as id_hh from hang_hoa inner join loai_hang on hang_hoa.id_loai_hang = loai_hang.id where hang_hoa.id = '$id'";
    return getData($sql);
}
function editHangHoa(){
    if (isset($_POST['btn_save'])){
        $id = $_GET['id_hh'];
        $ten_hh = $_POST['ten_hh'];
        $don_gia = $_POST['don_gia'];
        $giam_gia = $_POST['giam_gia'];
        $ngay_nhap = date('Y-m-d H:i:s');
        $id_loai_hang = $_POST['id_loai_hang'];
        $dac_biet = $_POST['dac_biet'];
        $so_luot_xem = $_POST['so_luot_xem'];
        $mo_ta = $_POST['mo_ta'];

        if (isset($_FILES['img'])){
            $allow_upload = true;
            $hang_hoa_detail = read_hanghoa_by_id();
            foreach ($hang_hoa_detail as $value){
                $hinh = empty($_FILES['img']['name']) ? $value['hinh'] : $_FILES['img']['name'];
            }
            $target_dir = "public/img/";
            $target_file = $target_dir .$_FILES['img']['name'];
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            $allowTypes = ['jpg', 'png', 'jpeg','jfif',''];

            if(!in_array($imageFileType, $allowTypes)){
                echo "<script>alert('Đuôi file không được phép upload')</script>";
                $allow_upload = false;
            }

            if ($allow_upload){
                move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
                $sql = "update hang_hoa set ten_hh = '$ten_hh', 
                    don_gia='$don_gia',giam_gia='$giam_gia',hinh='$hinh', 
                    ngay_nhap='$ngay_nhap',id_loai_hang='$id_loai_hang',dac_biet='$dac_biet', 
                    so_luot_xem='$so_luot_xem',mo_ta='$mo_ta'  where hang_hoa.id = '$id'";
                getData($sql, false);
                header("location: index.php?url=list_hanghoa");
            }
        }
    }
}