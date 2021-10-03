<?php

use Core\Helper;

include_once INCLUDE_PATH . "adminHeader.php" ?>


<div class="wrapper">
        <div class="row">
            <div class="col-12 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Quản lý đơn hàng bán
                        </h3>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Tên khách hàng</th>
                                    <th>Địa chỉ giao</th>
                                    <th>Tổng tiền</th>
                                    <th>Ngày mua</th>
                                    <th>Ngày vận chuyện</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($saleOrders as $saleOrder): ?>
                                    <tr>
                                        <td><?= $saleOrder['id'] ?></td>
                                        <td><?= $saleOrder['name'] ?></td>
                                        <td><?= $saleOrder['address'] ?></td>
                                        <td><?= $saleOrder['total'] ?></td>
                                        <td><?= $saleOrder['purchase_date'] ?></td>
                                        <td><?= $saleOrder['delivery_date'] ?></td>
                                        <td><?= Helper::checkStatus($saleOrder['status']) ?></td>
                                        <td>
                                            <a href="/admin/quan-ly-don-hang-ban/chi-tiet-don-hang-ban?id=<?= $saleOrder['id'] ?>" class="btn-1 bg-primary"><i class="fas fa-edit"></i> Xem</a> 
                                            <a href="" class="btn-1 bg-danger"><i class="fas fa-backspace"></i> Xóa</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once INCLUDE_PATH . "adminFooter.php" ?>