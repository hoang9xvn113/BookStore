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
                        <span><a href="/admin/quan-ly-sach/them-sach" class="btn-2 bg-success"><i class="fas fa-plus"></i> Thêm sách</a></span>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Ảnh sách</th>
                                    <th>Tên sách</th>
                                    <th>Tác giả</th>
                                    <th>Thể loại</th>
                                    <th>Nội dung</th>
                                    <th>Số lượng</th>
                                    <th>Giá bán</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach($bookList as $book): ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><img src="<?= IMAGES_PATH. "book/" . $book['image'] ?>" alt=""></td>
                                        <td><?= $book['name'] ?></td>
                                        <td><?= $book['author'] ?></td>
                                        <td><?= $book['genre_name'] ?></td>
                                        <td><?= $book['content'] ?></td>
                                        <td><?= $book['amount'] ?></td>
                                        <td><?= $book['price'] ?></td>
                                        <td><?= Helper::checkStatus($book['status']) ?></td>
                                        <td>
                                            <a href="/admin/quan-ly-sach/sua-thong-tin-sach?id=<?= $book['id'] ?>" class="btn-1 bg-primary"><i class="fas fa-edit"></i> Sửa</a> 
                                            <a href="" class="btn-1 bg-danger"><i class="fas fa-backspace"></i> Xóa</a>
                                        </td>
                                        <?php $i++ ?>
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