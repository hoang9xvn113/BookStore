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
                            Chi tiết đơn hàng nhập 
                        </h3>
                        <span><button type="submit" href="" class="btn-2 bg-warning"><i class="fas fa-edit"></i>Xác nhận đơn hàng</button></span>
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
                                            <th>Giá nhập</th>
                                            <th>Số lượng</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                    </thead>
        
                                    <tbody>
                                        <?php $i =1 ?>
                                        <?php $totalMoney = 0?>
                                        <?php foreach($importOrderDetail as $data): ?>
                                            <tr>
                                                <?php $subTotalMoney = $data['price'] * $data['amount'] ?>
                                                <?php $totalMoney += $subTotalMoney ?>
                                                <td><?= $i ?></td>
                                                <td><img src="<?= IMAGES_PATH . 'book/' . $data['image'] ?>" alt="" style="width: 150px;"></td>
                                                <td><?= $data['name'] ?></td>
                                                <td><?= $data['price'] ?></td>
                                                <td><?= $data['amount'] ?></td>
                                                <td><?= $subTotalMoney ?></td>
                                                <td></a> <a href="" class="btn-1 bg-danger"><i class="fas fa-backspace"></i> Xóa</a></td>
                                            </tr>
                                            <?php $i++ ?>
                                        <?php endforeach ?>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th colspan="5" style="text-align: right;">Tổng tiền: </th>
                                            <th><?= $totalMoney ?></th>
                                        </tr>
                                    </tfoot>
                                </table>

                                
                                <div class="col-6 row">
                                    <div class="col-4">
                                        <label for="">Ngày nhận</label>
                                    </div>

                                    <div class="col-8">
                                        <input type="date" name="importOrderReceive" id="" value="<?= $importOrder['receive_date'] == "0000-00-00" ? date("Y-m-d") :  $importOrder['receive_date']  ?>">
                                    </div>
                                </div>

                                <div class="col-6 row">
                                    <div class="col-4">
                                        <label for="">Trạng thái</label>
                                    </div>

                                    <div class="col-8">
                                        <select name="importOrderStatus" id="">
                                            <option value="0" <?= $importOrder['status'] == 0 ? "selected" : "" ?>>Chưa nhận</option>
                                            <option value="1" <?= $importOrder['status'] == 1 ? "selected" : "" ?>>Đã nhận</option>
                                        </select>
                                    </div>
                                </div>
                            <?php if (isset($status)): ?>
                            <?php Helper::checkEditStatus($status) ?>
                            <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
<?php include_once INCLUDE_PATH . "adminFooter.php" ?>