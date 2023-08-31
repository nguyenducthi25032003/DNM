
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Basic Datatable</h5>

                        <button type="button" class="btn btn-cyan btn-sm" onclick="window.location.href='index.php?url=add_hh'">Thêm mới</button>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên Hàng</th>
                                    <th>Đơn Giá</th>
                                    <th>Giảm Giá</th>
                                    <th>Ảnh</th>
                                    <th>Ngày Nhập</th>
                                    <th>Loại Hàng</th>
                                    <th>Hàng Đặc Biệt</th>
                                    <th>Số Lượt Xem</th>
                                    <th>Mô tả</th>
                                    <th>Hành Động</th>
                                </tr>
                                </thead>

                                <tbody>

                                <?php foreach ($hangHoa as $key => $value){ ?>
                                <tr>
                                    <th><?php echo $value['id_hh']?></th>
                                    <th><?php echo $value['ten_hh']?></th>
                                    <th><?php echo number_format($value['don_gia'])?> VNĐ</th>
                                    <th><?php echo number_format($value['giam_gia'])?> VNĐ</th>
                                    <th>
                                        <img width="100px" src="public/img/<?= $value['hinh']?>">
                                    </th>
                                    <th><?php echo $value['ngay_nhap']?></th>
                                    <th><?php echo $value['ten_loai']?></th>
                                    <th><?php echo $value['dac_biet'] == 1 ? "Có" : "Không"?> </th>
                                    <th><?php echo $value['so_luot_xem']?></th>
                                    <th><?php echo $value['mo_ta']?></th>

                                    <td>
                                        <button type="button" name="btn_del" class="btn btn-cyan btn-sm">
                                            <a style="color: white" href="index.php?url=edit_hh&id_hh=<?= $value['id_hh']?>">Sửa</a>
                                        </button>
                                        <button type="button" name="btn_del" class="btn btn-cyan btn-sm" onclick="return confirm('Chắc chắn xóa?')">
                                            <a style="color: white" href="index.php?url=del_hh&id_hh=<?= $value['id_hh']?>">Xóa</a>
                                        </button>
                                    </td>


                                </tr>
                                <?php } ?>

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

