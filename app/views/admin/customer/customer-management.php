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
                        <form action="" method="get">
                            <select name="type" id="">
                                <option value="0">Xem tất cả</option>
                                <option value="1">Xem khách hàng tiêu nhiều nhất</option>
                            </select>
                            <button type="submit">Xem</button>
                            </form>
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