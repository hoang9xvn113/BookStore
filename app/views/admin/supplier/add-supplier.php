<?php

use Core\Helper;

include_once INCLUDE_PATH . "adminHeader.php" ?>


<div class="wrapper">
        <div class="row">
            <div class="col-12 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Thêm nhà cung cấp
                        </h3>
                    </div>
                    <div class="card-content">
                        <form action="" method="POST" class="form row justify-content-center">
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Tên nhà cung cấp</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="supplierName"  id="">
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Số điện thoại</label>
                                </div>
                                <div class="col-8">
                                    <input type="tel" name="supplierPhone" id="">
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Email</label>
                                </div>
                                <div class="col-8">
                                    <input type="email" name="supplierEmail"  id="">
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Địa chỉ</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="supplierAddress"  id="">
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Trạng thái</label>
                                </div>
                                <div class="col-8">
                                    <select name="supplierStatus" id="">
                                        <option value="0">Chọn trạng thái </option>
                                        <option value="0">Unactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4"></div>
                                <div class="col-8">
                                    <button type="submit" class="btn-2 bg-success">Thêm nhà cung cấp</button>
                                </div>
                            </div>
                            <?php if (isset($status)): ?>
                                <?php Helper::checkAddStatus($status) ?>
                            <?php endif ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once INCLUDE_PATH . "adminFooter.php" ?>