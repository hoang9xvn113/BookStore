<?php

use Core\Helper;

include_once INCLUDE_PATH . "/header.php" ?>

    <main class="container d-flex justify-content-center">
        <form method="POST" class="form pd-lr-2 check-form ">
            <h1 class="mr-b-2 text-align-center">Đăng ký</h1>
            <p class="mr-b-3 text-align-center">Tạo tài khoản để truy cập các chức năng trang web</p>
            <h4 class="mr-b-1">Tài khoản</h4>
            <input type="text" name="user" placeholder="Tài khoản" class="w-100 mr-b-1">
            <h4 class="mr-b-1">Tên</h4>
            <input type="text" name="name" placeholder="Tên người dùng" class="w-100 mr-b-1">
            <h4 class="mr-b-1">Giới tính</h4>
            <select name="sex" id="" class="w-100 mr-b-1">
                <option value="0">Nam</option>
                <option value="1">Nữ</option>
            </select>
            <h4 class="mr-b-1">Số điện thoại</h4>
            <input type="tel" name="phone" placeholder="Số điện thoại" class="w-100 mr-b-1">
            <h4 class="mr-b-1">Email</h4>
            <input type="email" name="email" placeholder="Email" class="w-100 mr-b-1">
            <h4 class="mr-b-1">Mật khẩu</h4>
            <input type="text" name="password" placeholder="Mật khẩu" class="w-100 mr-b-2">
            <div class="d-flex justify-content-between ">
                <p>Bạn đã có tài khoản? <a href="/tai-khoan/dang-nhap" class="text--red">Đăng nhập</a> ở đây!</p>
                <button class="btn bg--red pd-btn-2 border-r-1">Đăng ký</button>
            </div>
            <?php 
                if (isset($status)) {
                    Helper::checkAddStatus($status);
                }
            ?>
    </form>
    </main>
    
    
    
    
 
<?php include_once INCLUDE_PATH . "/footer.php" ?>