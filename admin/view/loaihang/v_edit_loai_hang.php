
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <?php foreach ($loaiHang_details as $key => $value){ ?>
                    <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Sửa loại hàng</h4>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Loại hàng</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten_loai" name="ten_loai" value="<?= $value['ten_loai']?>" required>
                                </div>
                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" name="btn_save" class="btn btn-primary">Thêm</button>
                                    <a href="index.php?url=list_loaihang" type="submit" name="btn-submit" class="btn btn-primary">Danh sách</a>
                                </div>
                            </div>

                        </div>
                    </form>
                    <?php }?>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
</div>


