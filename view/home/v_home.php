
    <section class="banner grid grid-cols-3 gap-8">

        <div class="col-span-2 ">

            <!-- slideshow -->
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="img/PK-Khai-xuan-720-220-720x220-1.webp"
                         style="width:100%">
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="img/Realme-720-220-720x220-7.webp"
                         style="width:100%">
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img class="w-full" src="img/Befit720-220-720x220-1.webp"
                         style="width:100%">

                </div>
                <div class="  items-center flex">
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <a class="next " onclick="plusSlides(1)">❯</a>
                </div>
            </div>
            <br>
            <!-- row 1 -->
            <div class="grid grid-cols-3 gap-8 py-4 text-center">
                <?php foreach ($products as $key => $value){ ?>
                <div class="border-2 py-4 hover3">
                    <a href="index.php?url=products_details&id_prd=<?= $value['id']?>">
                        <img style="max-height: 200px;" class="mx-auto" src="admin/public/img/<?= $value['hinh']?>" alt="">
                    </a>
                    <p class="font-bold py-2"><?= number_format($value['don_gia'])?> VNĐ</p>
                    <a href="">
                        <p class="hover:text-red-500"><?= $value['ten_hh']?></p>
                    </a>
                </div>
                <?php }?>
            </div>
        </div>

        <div class="">

            <?php
            include_once ("view/tai_khoan/tai_khoan.php");
            ?>

            <!-- danh muc -->
            <?php
            include "template/aside.php"?>

        </div>
    </section>
</section>
