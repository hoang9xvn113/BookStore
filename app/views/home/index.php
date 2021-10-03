<?php include_once INCLUDE_PATH . 'header.php' ?>
    <!-- Main -->
    <main>
        <div class="bg--pink">
        <!-- Slider -->
        <div class="slider container position-relative mr-b-3">
            <div>
                <div class="slide">
                    <img src="<?= IMAGES_PATH ?>Newfolder/slider-1.webp" alt="">
                </div>
                <div class="slide active">
                    <img src="<?= IMAGES_PATH ?>Newfolder/slider-2.webp" alt="">
                </div>
                <div class="slide ">
                    <img src="<?= IMAGES_PATH ?>Newfolder/slider-3.webp" alt="">
                </div>
            </div>
            <div class="position-absolute text-align-center info-slider">
                <a class="btn bg--white border-r-2 pd-btn-1 mr-b-1">Science Fiction</a>
                <h1 class="text--white mr-b-1">The History of Phipino</h1>
                <a href="" class="btn bg--red border-r-2 pd-btn-2">Browser Store</a>
            </div>
            <a class="btn-left btn position-absolute"><i class="fa">&#xf053;</i></a>
            <a class="btn-right btn position-absolute"><i class="fa">&#xf054;</i></a>
        </div>


        <!-- Best selling -->
        <div class="best-selling container mr-t-1">
            <h1 class="text-align-center mr-b-2">Best Selling Books Ever</h1>
            <div class="best-selling-list owl-carousel mr-b-2">
                <?php foreach($bestSellingBooks as $book): ?>
                    <a href="/chi-tiet-sach?id=<?= $book['id'] ?>" class="product-card">
                        <div class="product-card-image">
                            <img src="<?= IMAGES_PATH . 'book/' . $book['image'] ?>" alt="">
                        </div>
                        <div class="product-card-info">
                            <h3><?= $book['name'] ?></h3>
                            <p><?= $book['author'] ?></p>
                            <div class="d-flex align-items-center">
                                <div class="mr-r-1">
                                    <h5>        
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </h5>
                                    <h2><small><?= $book['price'] ?>VNĐ</small></h2>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
        </div>

        <!-- Latest Published items -->
        <div class="lastest-published-items container mr-b-3">
            <div class="title mr-b-2 d-flex align-items-center justify-content-between">
                <h1>Các sản phẩm nổi bật nhất</h1>
                <div class="categories owl-carousel">
                    <div class="category-card">
                        <a class="btn bg--white active border--dark border-r-2 pd-btn-1">All</a>
                    </div>
                    <div class="category-card">
                        <a class="btn bg--white border--dark border-r-2 pd-btn-1">Horror</a>
                    </div>
                    <div class="category-card">
                        <a class="btn bg--white border--dark border-r-2 pd-btn-1">Thriller</a>
                    </div >
                    <div class="category-card">
                        <a class="btn bg--white border--dark border-r-2 pd-btn-1">Science Fiction</a>
                    </div>
                    <div class="category-card">
                        <a class="btn bg--white border--dark border-r-2 pd-btn-1">History</a>
                    </div>
                </div>
            </div>

            <div class="product-list d-grid col-150 mr-b-2">
                <?php foreach($featureBooks as $book): ?>
                    <a href="/chi-tiet-sach?id=<?= $book['id'] ?>" class="product-card">
                        <div class="product-card-image">
                            <img src="<?= IMAGES_PATH . 'book/' . $book['image'] ?>" alt="">
                        </div>
                        <div class="product-card-info">
                            <h3><?= $book['name'] ?></h3>
                            <p><?=  $book['author'] ?></p>
                            <div class="d-flex align-items-center">
                            <div class="mr-r-1">
                                <h5>        
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </h5>
                                <h2><small><?= number_format($book['price']) ?>VNĐ</small></h2>
                            </div>
                        </div>
                        </div>
                    </a>
                <?php endforeach ?>
            </div>  
            <p class="text-align-center"><a href="" class="btn bg--red border-r-2 pd-btn-2">Browser Store</a></p>
        </div>

        <div class="introduction d-grid container col-300 mr-b-3">
            <div id="introduction-item-1">
                <div class="introduction-info d-flex justify-content-between align-items-center">
                    <h2>The History of Phipino</h2>
                    <p class="text-align-center"><a href="" class="btn bg--red border-r-2 pd-btn-2">View Details</a></p>
                </div>
            </div>
            <div id="introduction-item-2">
                <div class="introduction-info d-flex justify-content-between align-items-center">
                    <h2>Wilma Mumduya                    </h2>
                    <p class="text-align-center"><a href="" class="btn bg--red border-r-2 pd-btn-2">View Details</a></p>
                </div>
            </div>


        </div>
    </main>

<?php include_once INCLUDE_PATH . 'footer.php' ?>