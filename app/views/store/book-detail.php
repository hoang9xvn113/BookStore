<?php include_once INCLUDE_PATH . "/header.php" ?>

    <main class="container">
        <div class="d-flex bg--light-white mr-b-1  book-details align-items-center">
            <div class="book-image">
                <img src="<?= IMAGES_PATH . 'book/' . $book['image'] ?>" alt="">
            </div>

            <div class="book-info">
                <h1><?= $book['name'] ?></h1>
                <h4>Tác giả: <?= $book['author'] ?></h4>
                <h3>Giá: <?= $book['price'] ?></h3>
                <h4>Thể loại: <?= $book['genre_name'] ?></h4>
                <h4>Số lượng tồn: <?= $book['amount'] ?></h4>
                <div class="rating mr-b-2">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                </div>
                <a href="/them-vao-gio-hang?id=<?= $book['id'] ?>" class="btn bg--red border-r-2 pd-btn-2">Thêm vào giỏ hàng</a>
            </div>
        </div>

        <!-- Related Products -->
        <div class="best-selling container mr-t-1">
            <h1 class="text-align-center mr-b-2">Sản phẩm liên quan</h1>
            <div class="best-selling-list owl-carousel mr-b-2">
                <?php foreach($bookRelateList as $bookRelate): ?>
                    <a href="/chi-tiet-sach?id=<?= $bookRelate['id'] ?>" class="product-card">
                        <div class="product-card-image">
                            <img src="<?= IMAGES_PATH . 'book/' . $bookRelate['image'] ?>" alt="">
                        </div>
                        <div class="product-card-info">
                            <h3><?= $bookRelate['name'] ?></h3>
                            <p><?= $bookRelate['author'] ?></p>
                            <div class="d-flex align-items-center">
                                <div class="mr-r-1">
                                    <h5>        
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </h5>
                                    <h2><small><?= $bookRelate['price'] ?>VNĐ</small></h2>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
        </div>

    </main>

    <?php include_once INCLUDE_PATH . "/footer.php" ?>