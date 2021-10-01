<?php

use Core\Helper;

include_once INCLUDE_PATH . "adminHeader.php" ?>



<div class="wrapper">
        <div class="row">
            <div class="col-12 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Thêm thể loại sách
                        </h3>
                    </div>
                    <div class="card-content">
                        <form class="form row" action="" method="POST">
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Tên thể loại</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="genreName"  id="">
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Trạng thái</label>
                                </div>
                                <div class="col-8">
                                    <select name="genreStatus" id="">
                                        <option value="0">Chọn trạng thái </option>
                                        <option value="0">Unactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4"></div>
                                <div class="col-8">
                                    <button class="btn-2 bg-success" type="submit">Thêm thể loại</button>
                                </div>
                            </div>
                        </form>
                        <?php if (isset($status)): ?>
                            <?php Helper::checkAddStatus($status) ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once INCLUDE_PATH . "adminFooter.php" ?>