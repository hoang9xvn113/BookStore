<?php

use Core\Helper;

include_once INCLUDE_PATH . "adminHeader.php" ?>

<div class="wrapper">
        <div class="row">
            <div class="col-12 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Sửa thông tin khách hàng
                        </h3>
                    </div>
                    <div class="card-content">
                    <form action="" method="POST" class="form row justify-content-center">
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Tên khách hàng</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="customerName"  id="" value="<?= $customer['name'] ?>">
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Giới tính</label>
                                </div>
                                <div class="col-8">
                                    <select name="customerSex" id="">
                                        <option value="0">Chọn giới tính</option>
                                        <option value="0" <?= $customer['sex'] == 0 ? "selected" : "" ?>>Nam</option>
                                        <option value="1" <?= $customer['sex'] == 1 ? "selected" : "" ?>>Nữ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Số điện thoại</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="customerPhone"  id="" value="<?= $customer['phone'] ?>">
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Email</label>
                                </div>
                                <div class="col-8">
                                    <input type="email" name="customerEmail"  id="" value="<?= $customer['email'] ?>">
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Tài khoản</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="customerUser"  id="" value="<?= $customer['user'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Mật khẩu</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="customerPassword"  id="" value="<?= $customer['password'] ?>">
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4"></div>
                                <div class="col-8">
                                    <button type="submit" class="btn-2 bg-success">Cập nhật thông tin khách hàng</button>
                                </div>
                            </div>
                            <?php if (isset($status)): ?>
                                <?php Helper::checkEditStatus($status) ?>
                            <?php endif ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once INCLUDE_PATH . "adminFooter.php" ?>