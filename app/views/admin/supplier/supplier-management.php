<?php

use Core\Helper;

include_once INCLUDE_PATH . "adminHeader.php" ?>


<div class="wrapper">
        <div class="row">
            <div class="col-12 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Bảng sách
                        </h3>
                        <span><a href="/admin/quan-ly-nha-cung-cap/them-nha-cung-cap" class="btn-2 bg-success"><i class="fas fa-plus"></i> Thêm nhà cung cấp</a></span>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên nhà cung cấp</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach($data as $supplier): ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $supplier['name'] ?></td>
                                        <td><?= $supplier['phone'] ?></td>
                                        <td><?= $supplier['email'] ?></td>
                                        <td><?= $supplier['address'] ?></td>
                                        <td><?= Helper::checkStatus($supplier['status']) ?></td>
                                        <td>
                                            <a href="/admin/quan-ly-nha-cung-cap/chinh-sua-nha-cung-cap?id=<?= $supplier['id'] ?>" class="btn-1 bg-primary"><i class="fas fa-edit"></i> Xem</a> 
                                            <a href="" class="btn-1 bg-danger"><i class="fas fa-backspace"></i> Xóa</a>
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