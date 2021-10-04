<?php

use Core\Helper;

include_once INCLUDE_PATH . "adminHeader.php" ?>


<div class="wrapper">
        <div class="row">
            <div class="col-12 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Quản lý đơn hàng nhập
                        </h3>
                        <span><a href="/admin/quan-ly-don-hang-nhap/them-don-hang-nhap" class="btn-2 bg-success"><i class="fas fa-plus"></i> Thêm đơn hàng nhập</a></span>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Tên nhà cung cấp</th>
                                    <th>Tổng tiền</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày nhận</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i=1 ?>
                                <?php foreach($importOrders as $importOrder): ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $importOrder['id'] ?></td>
                                        <td><?= $importOrder['name'] ?></td>
                                        <td><?= $importOrder['total_money'] ?></td>
                                        <td><?= $importOrder['creation_date'] ?></td>
                                        <td><?= $importOrder['receive_date'] ?></td>
                                        <td><?= Helper::checkStatus($importOrder['status']) ?></td>
                                        <td>
                                            <a href="/admin/quan-ly-don-hang-nhap/chi-tiet-don-hang-nhap?id=<?= $importOrder['id'] ?>" class="btn-1 bg-primary"><i class="fas fa-edit"></i> Xem</a> 
                                            <a href="/admin/quan-ly-nha-cung-cap/huy-don-hang-nhap?id=<?= $importOrder['id'] ?>" class="btn-1 bg-danger"><i class="fas fa-backspace"></i> Xóa</a>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once INCLUDE_PATH . "adminFooter.php" ?>