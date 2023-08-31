
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <?php foreach ($hanghoa_details as $key => $value){ ?>
                        <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body">
                                <h4 class="card-title">Sửa Hàng Hóa</h4>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên Hàng Hóa</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ten_hh" name="ten_hh" value="<?= $value['ten_hh']?>" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Đơn giá</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="don_gia" name="don_gia" value="<?= $value['don_gia']?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Giảm Giá</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="giam_gia" name="giam_gia" value="<?= $value['giam_gia']?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Hình</label>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file"  class="custom-file-input" id="validatedCustomFile" name="img">
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            <img width="100px" src="public/img/<?= $value['hinh']?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">loại hàng</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="id_loai_hang">
                                            <option value="<?= $value['id']?>"><?= $value['ten_loai']?> </option>
                                            <?php foreach ($loai_hang as $values){ ?>
                                            <option value="<?= $values['id']?>"> <?= $values['ten_loai']?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Đặc biệt</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="dac_biet">
                                            <option value="1">Có</option>
                                            <option value="0">Không</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Số lượt xem</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ten_hh" name="so_luot_xem" value="<?= $value['so_luot_xem']?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mô tả</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ten_hh" name="mo_ta" value="<?= $value['mo_ta']?>" required>
                                    </div>
                                </div>

                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="btn_save" class="btn btn-primary">Sửa</button>
                                        <a href="index.php?url=list_hanghoa" type="submit" name="btn-submit" class="btn btn-primary">Danh sách</a>
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


