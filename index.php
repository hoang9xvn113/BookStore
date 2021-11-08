<?php

use Core\App;
use Core\Router;

require_once "core/Autoload.php";

session_start();

$router = new Router;

$router
//API
    ->get("/api/get-book-by-id", [ApiController::class, 'getBookbyId'])
//admin
    //Trang chu
    ->get("/admin/dashboard", [AdminController::class, 'index'])
    ->get("/admin", [AdminController::class, 'index'])
    ->any("/admin/dang-nhap", [AccountController::class, 'loginAdmin'])
    //Quản lý sách
    ->get("/admin/quan-ly-sach", [BookController::class, 'index'])
    ->any("/admin/quan-ly-sach/sua-thong-tin-sach", [BookController::class, 'editBookInfo'])
    ->any("/admin/quan-ly-sach/them-sach", [BookController::class, 'addBook'])
    ->get("/admin/quan-ly-sach/xoa-sach", [BookController::class, 'deleteBook'])
    //Quản lý thể loại
    ->get("/admin/quan-ly-the-loai", [GenreController::class, 'index'])
    ->any("/admin/quan-ly-the-loai/them-the-loai", [GenreController::class, 'addGenre'])
    ->any("/admin/quan-ly-the-loai/chinh-sua-the-loai", [GenreController::class, 'editGenre'])
    ->get("/admin/quan-ly-the-loai/xoa-the-loai", [GenreController::class, 'deleteGenre'])
    //Quản lý khách hàng
    ->get("/admin/quan-ly-khach-hang", [CustomerController::class, 'index'])
    ->any("/admin/quan-ly-khach-hang/chinh-sua-thong-tin-khach-hang", [CustomerController::class, 'editCustomer'])
    ->get("/admin/quan-ly-khach-hang/xoa-khach-hang", [CustomerController::class, 'deleteCustomer'])
    //Phản hồi
    ->get("/admin/phan-hoi", [FeedbackController::class, 'index'])
    ->any("/admin/phan-hoi/tra-loi", [FeedbackController::class, 'reply'])
    ->get("/admin/phan-hoi/xoa-phan-hoi", [FeedbackController::class, 'deleteComment'])
    //Quản lý đơn hàng nhập
    ->get("/admin/quan-ly-don-hang-nhap", [ImportOrderController::class, 'index'])
    ->any("/admin/quan-ly-don-hang-nhap/them-don-hang-nhap", [ImportOrderController::class, 'addImportOrder'])
    ->any("/admin/quan-ly-don-hang-nhap/chi-tiet-don-hang-nhap", [ImportOrderController::class, 'editImportOrder'])
    ->get("/admin/quan-ly-nha-cung-cap/huy-don-hang-nhap", [ImportOrderController::class, 'cancelImportOrder'])
    //Quản lý đơn hàng bán
    ->get("/admin/quan-ly-don-hang-ban", [SaleOrderController::class, "index"])
    ->any("/admin/quan-ly-don-hang-ban/chi-tiet-don-hang-ban", [SaleOrderController::class, "editSaleOrder"])
    ->get("/admin/quan-ly-don-hang-ban/huy-don-hang-ban", [SaleOrderController::class, "cancelSaleOrder"])
    //Quản lý nhà cung cấp
    ->get("/admin/quan-ly-nha-cung-cap", [SupplierController::class, 'index'])
    ->any("/admin/quan-ly-nha-cung-cap/them-nha-cung-cap", [SupplierController::class, 'addSupplier'])
    ->any("/admin/quan-ly-nha-cung-cap/chinh-sua-nha-cung-cap", [SupplierController::class, 'editSupplier'])
    ->get("/admin/quan-ly-nha-cung-cap/xoa-nha-cung-cap", [SupplierController::class, 'deleteSupplier'])

//Client
    //Trang chủ
    ->get("/", [HomeController::class, 'index'])
    ->get("/trang-chu", [HomeController::class, 'index'])
    //Tài khoản
    ->any("/tai-khoan", [AccountController::class, 'login'])
    ->any("/tai-khoan/dang-nhap", [AccountController::class, 'login'])
    ->any("/tai-khoan/dang-ky", [AccountController::class, 'signUp'])
    ->get("/tai-khoan/dang-xuat", [AccountController::class, "logout"])
    //Cửa hàng
    ->any("/cua-hang", [BookController::class, 'displayStore'])
    ->get("/chi-tiet-sach", [BookController::class, 'viewBookDetail'])
    //Liên lạc
    ->any("/lien-lac", [FeedbackController::class, 'contact'])
    //Giỏ hàng
    ->any("/gio-hang", [CartController::class, 'index'])
    ->get("/them-vao-gio-hang", [CartController::class, 'addtoCart'])
    ->post("/thanh-toan", [CartController::class, 'checkout'])
    ->get("/gio-hang/xoa-hang", [CartController::class, 'deleteCart']);


$app = new App(
    $router, 
    $_SERVER['REQUEST_URI'], 
    $_SERVER['REQUEST_METHOD']);
    
$app->run();
