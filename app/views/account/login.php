<?php include_once INCLUDE_PATH . "/header.php" ?>

    <main class="container d-flex justify-content-center">

        <div class="form pd-lr-2 check-form">
            <h1 class="mr-b-2 text-align-center">Đăng nhập</h1>
            <p class="mr-b-3 text-align-center">Đăng nhập để truy cập các chức năng           </p>
            <h4 class="mr-b-1">Tài khoản</h4>
            <input type="text" placeholder="Tài khoản"  class="w-100 mr-b-1">
            <h4 class="mr-b-1">Mật khẩu</h4>
            <input type="password" placeholder="Mật khẩu" name="password" class="w-100 mr-b-2">
            <div class="d-flex justify-content-between ">
                <p>Bạn không có tài khoản? <a href="/tai-khoan/dang-ky" class="text--red">Đăng ký</a> tại đây!</p>
                <button class="btn bg--red pd-btn-2 border-r-1">Đăng nhập</button>
            </div>
        </div>
    </main>
    
    
<?php include_once INCLUDE_PATH . "/footer.php" ?>