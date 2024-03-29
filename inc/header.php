<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
} ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS_PATH . 'style1.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ABCBook</title>
</head>

<body>
    <!-- Header -->
    <header class="mr-b-1">
        <div class="header d-flex pd-tb-1 align-items-center container justify-content-between">
            <div class="logo">
                <a href="/trang-chu"><img src="<?= IMAGES_PATH ?>Newfolder/logo.webp" alt=""></a>
            </div>

            <div class="d-flex align-items-center">
                <div>
                    <?php if (!isset($_SESSION['account_id'])): ?>
                        <a href="/tai-khoan/dang-nhap" class="btn bg--red pd-btn-1 border-r-2">Đăng nhập</a>
                    <?php else: ?>
                        <a href="/tai-khoan/dang-xuat" class="btn bg--red pd-btn-1 border-r-2">Đăng xuất</a>
                    <?php endif ?>
                </div>
                <div class="position-relative cart-icon mr-l-1">
                    <a href="/gio-hang" class="btn"><i style="font-size:32px" class="fa">&#xf07a;</i></a>
                    <small class="tag bg--red border-r-3 text-align-center position-absolute"><?= count($_SESSION['cart']) ?></small>
                </div>
                <div class="mr-l-1">
                    <a id="menu-toggle"><i style="font-size:32px" class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>

        <form action="/cua-hang" method="POST" class="search input-group">
            <input type="text" name="name" placeholder="Tìm kiếm sách theo tên">
            <button class="btn bg--white text--red"><i class="fa fa-search"></i></button>
        </form>

        <nav>
            <ul class="text-align-center">
                <li><a href="/trang-chu">Trang chủ</a></li>
                <li><a href="/cua-hang">Cửa hàng</a></li>
                <li><a>About</a></li>
                <li><a>Blog</a></li>
                <li><a href="/lien-lac">Contact</a></li>
            </ul>
        </nav>
    </header>