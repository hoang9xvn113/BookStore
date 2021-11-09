<?php

use Core\Helper;

include_once INCLUDE_PATH . "/header.php" ?>

    <main class="container d-flex justify-content-center">
        <form method="POST" class="form pd-lr-2 check-form ">
            <h1 class="mr-b-2 text-align-center">Thanh toán</h1>
            <h4 class="mr-b-1">Tên</h4>
            <input type="text" name="user" placeholder="Tên người dùng" class="w-100 mr-b-1">
            <h4 class="mr-b-1">Địa chỉ giao hàng</h4>
            <input type="text" name="name" placeholder="Địa chỉ giao hàng" class="w-100 mr-b-1">
            <h4 class="mr-b-1">Loại ngân hàng</h4>
            <select name="sex" id="" class="w-100 mr-b-1">
                <option value="0">Vietcombank</option>
                <option value="1">Techcombank</option>
                <option value="">BIDV</option>
            </select>
            <h4 class="mr-b-1">Số điện thoại</h4>
            <input type="tel" name="phone" placeholder="Số điện thoại" class="w-100 mr-b-1">
            <h4 class="mr-b-1">Voucher</h4>
            <input type="text" name="user" placeholder="Voucher" class="w-100 mr-b-1">
            <div class="d-flex justify-content-between ">
                <button class="btn bg--red pd-btn-2 border-r-1">Thanh toán</button>
            </div>
            <?php 
                if (isset($status)) {
                    Helper::checkAddStatus($status);
                }
            ?>
    </form>
    </main>
    
    
    
    
 
<?php include_once INCLUDE_PATH . "/footer.php" ?>