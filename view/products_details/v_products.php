
    <section class="py-8">
        <?php foreach ($prd_details as $key => $value){
            $_SESSION['id_lh'] = $value['id']?>
        <div class="grid grid-cols-2 gap-8">
            <div>
                <img class="w-3/4" src="admin/public/img/<?= $value['hinh'] ?>" alt="">
            </div>
            <div>
                <div>
                    <p class="font-bold py-8 text-3xl"><?= $value['ten_hh'] ?></p>
                </div>
                <div class="py-4">
                    <p class="text-2xl font-bold"><?= number_format($value['don_gia']) ?> VNĐ</p>
                    <p class="line-through"><?= number_format($value['giam_gia']) ?> VNĐ </p>
                </div>
                <div class=" py-8">
                    <p class="font-bold py-8 text-2xl"> Thông tin sản phẩm</p>
                    <p><?= $value['mo_ta'] ?></p>
                </div>
                <div>
                    <button class="border bg-red-400 py-5 px-12 rounded-xl font-bold">Đặt hàng</button>
                </div>
            </div>
        </div>
        <?php }?>
    </section>
    <section>

                                           <!-- binhluan-->
        <div class="grid grid-cols-2 gap-8  ">
            <?php
            include_once ("view/comment/v_binh_luan.php");
            ?>

            <div >
                <p class="font-bold text-3xl ">Sản phẩm cùng loại</p>
                <div class="py-8 grid grid-cols-2 ">
                    <?php foreach ($products as $key => $values){
                        if ($values['id_loai_hang'] == $value['id_loai_hang']){?>
                    <div <?php  echo ($_GET['id_prd'] == $values['id']) ? "hidden" : "";?> class="py-8" >
                        <a href="index.php?url=products_details&id_prd=<?= $values['id']?>">
                        <img class="w-1/2" src="admin/public/img/<?= $values['hinh'] ?>" alt=""></a>
                        <div>
                            <p class="font-bold py-2 text-xl"><?= $values['ten_hh'] ?></p>
                        </div>
                        <div class="py-2">
                            <p class="text-2xl font-bold"><?= number_format($values['don_gia']) ?>VNĐ</p>
                            <p class="line-through"><?= number_format($values['giam_gia']) ?>VNĐ</p>
                        </div>
                    </div>
                    <?php }}?>
                </div>
            </div>
        </div>

    </section>