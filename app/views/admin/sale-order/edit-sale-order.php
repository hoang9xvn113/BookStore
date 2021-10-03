<?php

use Core\Helper;

include_once INCLUDE_PATH . "adminHeader.php" ?>


<form action="" method="post">
<div class="wrapper">
        <div class="row">
            <div class="col-12 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Chi tiết đơn hàng 01
                        </h3>
                        <span><button type="submit" class="btn-2 bg-warning"><i class="fas fa-edit"></i> Cập nhật đơn hàng</button></span>
                    </div>
                    <div class="card-content">
                        <div class="form row">
                            <div class="col-12">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Ảnh sách</th>
                                            <th>Tên sách</th>
                                            <th>Giá bán</th>
                                            <th>Số lượng</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                    </thead>
        
                                    <tbody>
                                        <?php $i=1 ?>
                                        <?php $total = 0 ?>
                                        <?php foreach($saleOrderDetail as $book): ?>
                                            <tr>
                                                <?php $subtotal =  $book['price']*$book['amount'] ?>
                                                <?php $total += $subtotal ?>
                                                <td><?= $i ?></td>
                                                <td><img src="<?= IMAGES_PATH . "book/" . $book['image'] ?>" alt=""></td>
                                                <td><?= $book['name'] ?></td>
                                                <td><?= $book['price'] ?></td>
                                                <td><?= $book['amount'] ?></td>
                                                <td><?=  $subtotal ?></td>
                                                <td></a> <a href="" class="btn-1 bg-danger"><i class="fas fa-backspace"></i> Xóa</a></td>
                                            </tr>
                                            <?php $i++ ?>
                                        <?php endforeach ?>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th colspan="5" style="text-align: right;">Tổng tiền: </th>
                                            <th><?= $total ?></th>
                                        </tr>
                                    </tfoot>
                                </table>

                                
                                <div class="col-7 row">
                                    <div class="col-4">
                                        <label for="">Trạng thái</label>
                                    </div>

                                    <div class="col-8">
                                        <select name="status" id="">
                                            <option value="0">Đang vận chuyển</option>
                                            <option value="1">Hoàn thành vận chuyển</option>
                                            <option value="-1">Hủy vận chuyển</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-7 row">
                                    <div class="col-4">
                                        <label for="">Ngày vận chuyển</label>
                                    </div>

                                    <div class="col-8">
                                        <input type="date" name="date" id="" value="<?= date("Y-m-d") ?>">
                                    </div>
                                </div>
                                <?php
                                    if (isset($status)) {
                                        Helper::checkEditStatus($status);
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php include_once INCLUDE_PATH . "adminFooter.php" ?>