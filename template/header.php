<body>
<section class="mx-auto max-w-7xl py-6">
    <div class="container">
        <h1 class="py-4 text-3xl px-5 blue text-green-700 bg-green-100">
            SIÊU THỊ TRỰC TUYẾN
        </h1>
    </div>
    <section class="menu py-6">
        <ul class="flex bg-black py-4 text-white  font-bold">
            <li><a href="index.php" class="hover:text-black hover:bg-red-300 py-5 px-5">Trang chủ</a></li>
            <li class="">
                <a class="hover:text-black hover:bg-red-300 py-5 px-5">Sản phẩm</a>
                <ul class="mt-4 absolute bg-black w-full hidden">
                    <?php
                    include_once "models/m_home.php";
                    $type = get_type();
                    foreach ($type as $key => $value){
                    ?>
                    <a href="index.php?url=prd_by_type&id_type=<?= $value['id']?>">
                        <li class="hover:text-black py-4 hover:bg-red-300  px-5 "><?= $value['ten_loai'] ?></li>
                    </a>
                    <?php } ?>
                </ul>
            </li>
            <li><a href="" class="hover:text-black hover:bg-red-300 py-5 px-5">Giới thiệu</a></li>
            <li><a href="" class="hover:text-black hover:bg-red-300 py-5 px-5">Liên hệ</a></li>
            <li><a href="" class="hover:text-black hover:bg-red-300 py-5 px-5">Góp ý</a></li>
            <li><a href="" class="hover:text-black hover:bg-red-300 py-5 px-5">Hỏi đáp</a></li>
            <div class="pl-[400px]" <?php echo isset($_SESSION['tai_khoan']) ? "" : "hidden"?>>
                <button>
                    <a href="index.php?url=logout"  class=" border-2 py-2 px-2 hover:bg-slate-200 hover:text-black">Đăng xuất</a>
                </button>
            </div>
        </ul>

    </section>
