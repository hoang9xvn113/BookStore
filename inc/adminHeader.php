<?php

use Core\Session;

Session::checkAdminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Import lib -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS_PATH . "adminStyle.css" ?>">
    <!-- End import lib -->



</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link">
                    <i class="fas fa-bars" onclick="collapseSidebar()"></i>
                </a>
            </li>
            <li class="nav-item">
                <img src="<?= IMAGES_PATH . "AT-pro-white.png" ?>"class="logo logo-light" alt="">
                <img src="<?= IMAGES_PATH . "AT-pro-black.png"?>" class="logo logo-dark" alt="">
            </li>
        </ul>

        <div class="navbar-search">
            <input type="text" placeholder="Bạn cần tìm cái gì? " id="">
            <i class="fas fa-search"></i>
        </div>

        <ul class="navbar-nav nav-right">
            <li class="nav-item">
                <div class="nav-link" onclick="switchTheme()">
                    <i class="fas fa-moon dark-icon"></i>
                    <i class="fas fa-sun light-icon"></i>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link">
                    <i class="fas fa-bell dropdown-toggle" data-toggle="notification-menu"></i>
                    <span class="navbar-badge">15</span>
                </a>
                <ul id="notification-menu" class="dropdown-menu notification-menu ">
                    <div class="dropdown-menu-header">
                        <span>Thông báo</span>
                    </div>
                    <div class="dropdown-menu-body overlay-scrollbar">
                        <li class="dropdown-menu-item">
                            <a href="" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-gift"></i>
                                </div>
                                <span>
                                    Nguyễn Văn Hoàng đã gửi phản hồi
                                    <br>
                                    <span>
                                        15/07/2021
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-gift"></i>
                                </div>
                                <span>
                                    Nguyễn Văn Long đã gửi phản hồi
                                    <br>
                                    <span>
                                        15/07/2021
                                    </span>
                                </span>
                            </a>
                        </li>
                    </div>
                    <div class="dropdown-menu-footer">
                        <span>
                            Xem tất cả thông báo
                        </span>
                    </div>
                </ul>
            </li>
            <li class="nav-item">
                <div class="avt dropdown">
                    <img src="<?= IMAGES_PATH . "avt.png" ?>" alt="" class="dropdown-toggle" data-toggle="user-menu">
                    <ul id="user-menu" class="dropdown-menu">
                        <li class="dropdown-menu-item">
                            <a href="" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <span>Thông tin người dùng</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-unlock"></i>
                                </div>
                                <span>Đổi mật khẩu</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-cog"></i>
                                </div>
                                <span>Cài đặt</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-sign-out-alt"></i>
                                </div>
                                <span>Đăng xuất</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="sidebar-nav">
            <li class="sidebar-nav-item">
                <a href="/admin/dashboard" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-home"></i>
                    </div>
                    <span>
                        Trang chủ
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="/admin/quan-ly-sach" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-book"></i>
                    </div>
                    <span>
                        Quản lý sách
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="/admin/quan-ly-the-loai" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-list-ul"></i>
                    </div>
                    <span>
                        Quản lý thể loại sách
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="/admin/quan-ly-don-hang-ban" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-cart-arrow-down"></i>
                    </div>
                    <span>
                        Quản lý đơn hàng bán
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="/admin/quan-ly-don-hang-nhap" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-cart-plus"></i>
                    </div>
                    <span>
                        Quản lý đơn hàng nhập
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="/admin/quan-ly-khach-hang" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-user-alt"></i>
                    </div>
                    <span>
                        Quản lý khách hàng
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="/admin/quan-ly-nha-cung-cap" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-toolbox"></i>
                    </div>
                    <span>
                        Quản lý nhà cung cấp
                    </span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="/admin/phan-hoi" class="sidebar-nav-link">
                    <div>
                        <i class="fas fa-comment-alt"></i>
                    </div>
                    <span>
                        Phản hồi
                    </span>
                </a>
            </li>
        </ul>
    </div>


    