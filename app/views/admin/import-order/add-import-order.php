<?php

use Core\Helper;

include_once INCLUDE_PATH . "adminHeader.php" ?>

<pre>
<?php if (isset($status)) {
    Helper::checkAddStatus($status);
} ?>
</pre>

<div class="wrapper">
        <div class="row">
            <div class="col-12 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Tạo đơn hàng nhập
                        </h3>
                        <form action="?total=<?= $total ?>" method="post">
                        <span><button type="submit" class="btn-2 bg-warning">Tạo đơn hàng</button></span>
                    </div>
                    <div class="card-content">
                        <div id="import-order-form" class="form row">
                            <div class="col-12 row align-item-center">
                                <div class="col-2">
                                    <label for="">Chọn nhà cung cấp</label>
                                </div>

                                <div class="col-4">
                                    <select name="supplierId" id="">
                                        <?php foreach($suppliers as $supplier): ?>
                                            <option value="<?= $supplier['id'] ?>"><?= $supplier['name'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <?php for($i=1;$i<=$total;$i++): ?>
                                <div class="col-12 row border align-item-center form">
                                    <div class="col-12 col-m-3 col-sm-6">
                                        <h3>Sản phẩm thứ <?= $i ?></h3>
                                        <img id="bookImage<?= $i ?>" style="max-width: 200px" src="<?= IMAGES_PATH . 'book/' . $books[0]['image'] ?>" alt="">
                                    </div>
                                    <div class="col-12 col-m-8 col-sm-6 row">
                                        <div class="col-4 row align-item-center">
                                            <div class="col-4">
                                                <label for="">Chọn sản phẩm</label>
                                            </div>
                                            <div class="col-8">
                                                <select name="bookId<?= $i ?>" id="" onchange="getImage(event);">
                                                    <?php foreach($books as $book): ?>
                                                        <option value="<?= $book['id'] ?>"><?= $book['name'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                                <h1 id="demo"></h1>
                                            </div>
                                        </div>
                                        <div class="col-4 row align-item-center">
                                            <div class="col-4">
                                                <label for="">Giá nhập</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="number" min="0" step="10000" value="10000" name="bookPrice<?= $i ?>"  id="">
                                            </div>
                                        </div>
                                        <div class="col-4 row align-item-center">
                                            <div class="col-4">
                                                <label for="">Chọn số lượng</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="number" min="0" value="1" name="bookAmount<?= $i ?>"  id="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor ?>
                            </form>
                            <form action="" method="get">
                            <div class="col-12 row">
                                <div class="col-2">
                                    <label for="">Số sản phẩm</label>
                                </div>

                                <div class="col-4">
                                    <input type="number" name="total" value="1" min="1" id="">
                                </div>

                                <div class="col-2">
                                    <button type="submit" class="btn-1 bg-success">Thêm sản phẩm</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include_once INCLUDE_PATH . "adminFooter.php" ?>