<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS_PATH . 'style1.css' ?>" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ABCBook</title>
</head>
<body>
    <!-- Header -->
    <header class="mr-b-1">
        <div class="header d-flex pd-tb-1 align-items-center container justify-content-between">
            <div class="logo">
                <a href="index.html"><img src="<?= IMAGES_PATH ?>Newfolder/logo.webp" alt=""></a>
            </div>

            <div class="d-flex align-items-center">
                <div>
                    <a href="login.html" class="btn bg--red pd-btn-1 border-r-2">Sign in</a>
                </div>
                <div class="position-relative cart-icon mr-l-1">
                    <a href="cart.html" class="btn"><i style="font-size:32px" class="fa">&#xf07a;</i></a>
                    <small class="tag bg--red border-r-3 text-align-center position-absolute">0</small>
                </div>
                <div class="mr-l-1">
                    <a id="menu-toggle"><i style="font-size:32px" class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>

        <div class="search input-group">
            <input type="text" placeholder="Search book by author or publisher">
            <button class="btn bg--white text--red"><i class="fa fa-search"></i></button>
        </div>

        <nav>
            <ul class="text-align-center">
                <li><a href="index.html">Home</a></li>
                <li><a href="store.html">Store</a></li>
                <li><a>About</a></li>
                <li><a>Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>