<?php

use Core\Helper;

include_once INCLUDE_PATH . "adminHeader.php" ?>


<div class="wrapper">
        <div class="row">
            <div class="col-6 col-m-10 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Bảng thể loại
                        </h3>
                        <span><a href="/admin/quan-ly-the-loai/them-the-loai" class="btn-2 bg-success"><i class="fas fa-plus"></i> Thêm thể loại sách</a></span>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên thể loại</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach($data as $genre): ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $genre['name'] ?></td>
                                        <td><?= Helper::checkStatus($genre['status']) ?></td>
                                        <td>
                                            <a href="/admin/quan-ly-the-loai/chinh-sua-the-loai?id=<?= $genre['id'] ?>" class="btn-1 bg-primary"><i class="fas fa-edit"></i> Xem</a>
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