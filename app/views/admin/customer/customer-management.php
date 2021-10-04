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
                        
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên khách</th>
                                    <th>Giới tính</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Tài khoản</th>
                                    <th>Mật khẩu</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach($customers as $customer): ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $customer['name'] ?></td>
                                        <td><?= Helper::checkSex($customer['sex']) ?></td>
                                        <td><?= $customer['phone'] ?></td>
                                        <td><?= $customer['email'] ?></td>
                                        <td><?= $customer['user'] ?></td>
                                        <td><?= $customer['password'] ?></td>
                                        <td>
                                            <a href="/admin/quan-ly-khach-hang/chinh-sua-thong-tin-khach-hang?id=<?= $customer['id'] ?>" class="btn-1 bg-primary"><i class="fas fa-edit"></i> Xem </a>
                                            <a href="/admin/quan-ly-khach-hang/xoa-khach-hang?id=<?= $customer['id'] ?>" class="btn-1 bg-danger"><i class="fas fa-backspace"></i> Xóa</a>
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