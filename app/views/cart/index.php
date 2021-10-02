<?php include_once INCLUDE_PATH . "/header.php" ?>
<form action="/thanh-toan" method="POST">
    <main class="container">
        <div class="back position-relative mr-b-3">
            <div class="back-image">
                <img src="<?= IMAGES_PATH ?>Newfolder/category.webp" alt="">
            </div>
            <h1>Giỏ hàng</h1>
        </div>

        <div class="cart mr-b-2">
            <table class="w-100 text-align-center">
                <thead>
                    <tr>
                        <th>Sách</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                        <?php foreach($books as $book): ?>
                            <tr class="mr-b-1 border-bottom">
                                <td class="d-flex align-items-center"><img class="mr-r-1" src="<?= IMAGES_PATH . 'book/' . $book['image'] ?>" alt="">
                                <h3><?= $book['name'] ?></h3></td>
                                <td><?= number_format($book['price']) ?>VNĐ</td>
                                <input type="text" name="id<?=$i?>" id="" value="<?=$book['id']?>" hidden>
                                <td><input type="number" name="amount<?= $i ?>" value="1" onchange="changeAmount(event)"></td>
                                <?php $i++ ?>
                            </tr>
                        <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <label for="">Địa chỉ giao hàng</label>
        <input type="text" name="address">
        <p class="text-align-right mr-b-2"><button type="submit" class="btn test bg--red border-r-2 pd-btn-2">Đặt hàng</a></button>

    </main>
    </form>
    <?php include_once INCLUDE_PATH . "/footer.php" ?>