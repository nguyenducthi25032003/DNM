
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

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Noi dung</th>
                                    <th>Ngay Binh Luan</th>
                                    <th>Tên khách hàng</th>
                                    <th>Sản phẩm</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>

                                <tbody>

                                <?php foreach ($binh_luan as $key => $value){ ?>
                                    <tr>
                                        <th><?php echo $value['id_bl']?></th>
                                        <th><?php echo $value['noi_dung']?></th>
                                        <th><?php echo $value['ngay_bl']?></th>
                                        <th><?php echo $value['tai_khoan']?></th>
                                        <th><?php echo $value['ten_hh']?></th>

                                        <td>
                                            <button type="button" name="btn_del" class="btn btn-cyan btn-sm" onclick="return confirm('Chắc chắn xóa?')">
                                                <a style="color: white" href="index.php?url=del_bl&id_bl=<?= $value['id']?>">Xóa</a>
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

