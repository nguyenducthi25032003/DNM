<div <?php echo isset($_SESSION['tai_khoan']) ? "hidden" : "" ?> class="border-2">

    <!-- Tai khoan -->
    <div class="bg-slate-200 py-4 px-5">
        <h1 class="font-bold">Tài khoản</h1>
    </div>
    <div class="py-4 px-5">
        <form action="" method="post">
            <p>Tên đăng nhập</p>
            <input class="border-2 w-3/4 px-3" type="text" name="tai_khoan">
            <br>
            <br>
            <p>mật khẩu</p>
            <input class="border-2 w-3/4 px-3" type="password" name="mat_khau">
            <br>
            <br>
            <p>email</p>
            <input class="border-2 w-3/4 px-3" type="email" name="email">
            <br>
            <br>
            <button class="border-2 py-2 px-2 hover:bg-slate-200" type="submit" name="btn_add">
                Đăng kí
            </button>
            <br><br>
        </form>
    </div>
</div>

