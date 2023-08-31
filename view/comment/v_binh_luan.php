
<div>
    <div <?php echo isset($_SESSION['tai_khoan']) ? "" : "hidden" ?>>
    <h1 class="font-bold text-3xl py-4">Bình luận</h1>
    <form action="index.php?url=add_bl" method="post">
        <input class="w-full border-2 py-6 px-5" type="text" placeholder="your comment" id="noi_dung" name="noi_dung">
        <button class="border mt-2 p-4 rounded-xl" type="submit" name="btn_add_bl">Gửi</button>
    </form>
    </div>
    <div <?php echo isset($_SESSION['tai_khoan']) ? "hidden" : "" ?>>
        <span class="text-2xl">Vui lòng đăng nhập để bình luận về sản phẩm</span>
    </div>


    <div class="">
        <?php
        include_once "models/m_home.php";
        $bl = get_binh_luan();
        foreach ($bl as $key => $value){ ?>
        <div class="py-8">
            <div class="text-2xl flex gap-2 items-center">
                <i class="fas fa-user"></i>
                <div>
                    <p class="text-xl"><?= $value['tai_khoan'] ?></p>
                    <p class="text-xs"><?= $value['ngay_bl'] ?></p>
                </div>
            </div>
            <p class="py-4"><?= $value['noi_dung'] ?></p>
        </div>
        <?php } ?>

    </div>
</div>