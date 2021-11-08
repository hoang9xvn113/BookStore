<?php

use Core\Helper;

include_once INCLUDE_PATH . "adminHeader.php" ?>


<div class="wrapper">
        <div class="row">
            <div class="col-12 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Phản hồi của khách hàng
                        </h3>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>Email</th>
                                    <th>Tin nhắn</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 0 ?>
                                <?php foreach($comments as $comment): ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $comment['name'] ?></td>
                                        <td><?= $comment['email'] ?></td>
                                        <td><?= $comment['message'] ?></td>
                                        <td><?= Helper::checkStatus($comment['status']) ?></td>
                                        <td>
                                            <a href="phan-hoi/tra-loi?id=<?= $comment['id'] ?>" class="btn-1 bg-primary"><i class="fas fa-edit"></i> Trả lời phản hồi</a>
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