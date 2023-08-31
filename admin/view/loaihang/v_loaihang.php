
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

                        <button type="button" class="btn btn-cyan btn-sm" onclick="window.location.href='index.php?url=add_lh'">Thêm mới</button>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên loại</th>

                                </tr>
                                </thead>

                                <tbody>

                                <?php foreach ($loaiHang as $key => $value){ ?>
                                    <tr>
                                        <th><?php echo $value['id']?></th>
                                        <th><?php echo $value['ten_loai']?></th>

                                        <td>
                                            <button type="button" name="btn_del" class="btn btn-cyan btn-sm">
                                                <a style="color: white" href="index.php?url=edit_lh&id_lh=<?= $value['id']?>">Sửa</a>
                                            </button>

                                            <button type="button" name="btn_del" class="btn btn-cyan btn-sm" onclick="return confirm('Chắc chắn xóa?')">
                                                <a style="color: white" href="index.php?url=del_lh&id_lh=<?= $value['id']?>">Xóa</a>
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

