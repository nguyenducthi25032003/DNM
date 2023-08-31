
    <section class="banner grid grid-cols-3 gap-8">

        <div class="col-span-2 ">

            <!-- row 1 -->
            <div class="grid grid-cols-3 gap-8 py-4 text-center">
                <?php foreach ($prd_type as $key => $value){ ?>
                    <div class="border-2 py-4 hover3">
                        <a href="index.php?url=products_details&id_prd=<?= $value['id']?>">
                            <img class="mx-auto" src="admin/public/img/<?= $value['hinh'] ?>" alt=""></a>
                        <p class="font-bold py-2"><?= number_format($value['don_gia'])?> VNĐ</p>
                        <a href="">
                            <p class="hover:text-red-500"><?= $value['ten_hh']?></p>
                        </a>
                    </div>
                <?php }?>
            </div>
        </div>


        <div class="">
<!--            <div class="border-2">-->
                <!-- Tai khoan -->
<!--                <div class="bg-slate-200 py-4 px-5">-->
<!--                    <h1 class="font-bold">Tài khoản</h1>-->
<!--                </div>-->
<!--                <div class="py-4 px-5">-->
<!--                    <p>Tên đăng nhập</p>-->
<!--                    <input class="border-2 w-3/4 px-3" type="text">-->
<!--                    <br>-->
<!--                    <br>-->
<!--                    <p>mật khẩu</p>-->
<!--                    <input class="border-2 w-3/4 px-3" type="password">-->
<!--                    <br>-->
<!--                    <br>-->
<!--                    <button class="border-2 py-2 px-2 hover:bg-slate-200">Đăng nhập</button>-->
<!--                    <br><br>-->
<!--                    <ul class="px-5">-->
<!--                        <li class="list-disc text-blue-500 hover:text-green-700"><a href="">quên mật khẩu</a></li>-->
<!--                        <li class="list-disc text-blue-500 hover:text-green-700"><a href="">đăng kí thành viên</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->

            <!-- danh muc -->
            <?php
            include_once "template/aside.php"
            ?>

        </div>
    </section>
</section>

