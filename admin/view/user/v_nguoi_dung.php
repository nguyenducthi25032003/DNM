
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
                                    <th>tai khoan</th>
                                    <th>mat khau</th>
                                    <th>email</th>
                                    <th>vai tro</th>

                                </tr>
                                </thead>

                                <tbody>

                                <?php foreach ($user as $key => $value){ ?>
                                    <tr>
                                        <th><?php echo $value['id']?></th>
                                        <th><?php echo $value['tai_khoan']?></th>
                                        <th><?php echo $value['mat_khau']?></th>
                                        <th><?php echo $value['email']?></th>
                                        <th><?php echo $value['vai_tro']?></th>

                                        <td>


                                            <button type="button" name="btn_del" class="btn btn-cyan btn-sm" onclick="return confirm('Chắc chắn xóa?')">
                                                <a style="color: white" href="index.php?url=del_user&id_kh=<?= $value['id']?>">Xóa</a>
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

