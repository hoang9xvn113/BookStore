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
                        <form action="" method="POST" class="form row">
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Tên thể loại</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="genreName"  id="" value="<?= $data['name'] ?>">
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Trạng thái</label>
                                </div>
                                <div class="col-8">
                                    <select name="genreStatus" id="">
                                        <option value="0">Chọn trạng thái </option>
                                        <option value="0" <?= $data['status'] == 0 ? "selected" : "" ?>>Unactive</option>
                                        <option value="1" <?= $data['status'] == 1 ? "selected" : "" ?>>Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4"></div>
                                <div class="col-8">
                                    <button type="submit" class="btn-2 bg-success">Cập nhật thể loại</a>
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