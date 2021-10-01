<?php include_once INCLUDE_PATH . '/header.php' ?>

    <main class="container">
        <div class="back position-relative mr-b-3">
            <div class="back-image">
                <img src="<?= IMAGES_PATH ?>NewFolder/category.webp" alt="">
            </div>
            <h1>Cửa hàng sách</h1>
        </div>

        <div class="d-flex mr-b-3 st">
            <div class="filter">
                <div class="Genres mr-b-2">
                    <h3>Filter by Genres</h3>
                    <p>
                        <input type="checkbox" name="" id="">
                        <label>History</label>
                    </p>
                    <p>
                        <input type="checkbox" name="" id="">
                        <label>History</label>
                    </p>
                    <p>
                        <input type="checkbox" name="" id="">
                        <label>History</label>
                    </p>
                    <p>
                        <input type="checkbox" name="" id="">
                        <label>History</label>
                    </p>
                    <p>
                        <input type="checkbox" name="" id="">
                        <label>History</label>
                    </p>
                </div>

                <div class="price mr-b-2">
                    <h3>Filter by Price</h3>
                    <select name="" id="" class="w-100">
                        <option value="">Filter by Rating</option>
                        <option value="">1 Star Rating</option>
                        <option value="">2 Star Rating</option>
                        <option value="">3 Star Rating</option>
                        <option value="">4 Star Rating</option>
                        <option value="">5 Star Rating</option>
                    </select>
                </div>

                <div class="Publisher mr-b-2">
                    <h3>Filter by Genres</h3>
                    <p>
                        <input type="checkbox" name="" id="">
                        <label>Green Publications</label>
                    </p>
                    <p>
                        <input type="checkbox" name="" id="">
                        <label>Anodo Publications</label>
                    </p>
                    <p>
                        <input type="checkbox" name="" id="">
                        <label>Rinku Publication</label>
                    </p>
                </div>

                <div class="Author mr-b-2">
                    <h3>Filter by Genres</h3>
                    <p>
                        <input type="checkbox" name="" id="">
                        <label>Buster Hyman</label>
                    </p>
                    <p>
                        <input type="checkbox" name="" id="">
                        <label>Phil Harmotic</label>
                    </p>
                    <p>
                        <input type="checkbox" name="" id="">
                        <label>Cam L.Toe</label>
                    </p>
                </div>

                <button class="btn bg--red pd-btn-2 border-r-1">Filter</button>
            </div>

            <div class="store">
                <div class="text-align-right">
                    <select name="" id="" class="w-40 mr-b-1">
                        <option value="">Filter by Rating</option>
                        <option value="">1 Star Rating</option>
                        <option value="">2 Star Rating</option>
                        <option value="">3 Star Rating</option>
                        <option value="">4 Star Rating</option>
                        <option value="">5 Star Rating</option>
                    </select>
                </div>

                <div class="d-grid col-150 mr-b-2">
                    <?php foreach($books as $book): ?>
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
                                        <h2><small><?= number_format($book['price']) ?>VNĐ</small></h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach ?>
                </div>

                <div class="page text-align-right">
                    <button class="btn bg--red pd-btn-1">1</button>
                    <button class="btn bg--red pd-btn-1">2</button>
                    <button class="btn bg--red pd-btn-1">3</button>
                    <button class="btn bg--red pd-btn-1">4</button>
                </div>


            </div>
        </div>
    </main>

    
    <?php include_once INCLUDE_PATH . '/footer.php' ?>