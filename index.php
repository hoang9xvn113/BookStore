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
    //Quản lý sách
    ->get("/admin/quan-ly-sach", [BookController::class, 'index'])
    ->any("/admin/quan-ly-sach/sua-thong-tin-sach", [BookController::class, 'editBookInfo'])
    ->any("/admin/quan-ly-sach/them-sach", [BookController::class, 'addBook'])
    //Quản lý thể loại
    ->get("/admin/quan-ly-the-loai", [GenreController::class, 'index'])
    ->any("/admin/quan-ly-the-loai/them-the-loai", [GenreController::class, 'addGenre'])
    ->any("/admin/quan-ly-the-loai/chinh-sua-the-loai", [GenreController::class, 'editGenre'])
    //Quản lý khách hàng
    ->get("/admin/quan-ly-khach-hang", [CustomerController::class, 'index'])
    ->any("/admin/quan-ly-khach-hang/chinh-sua-thong-tin-khach-hang", [CustomerController::class, 'editCustomer'])
    //Phản hồi
    ->get("/admin/phan-hoi", [FeedbackController::class, 'index'])
    ->get("/admin/phan-hoi/tra-loi", [FeedbackController::class, 'reply'])
    //Quản lý đơn hàng nhập
    ->get("/admin/quan-ly-don-hang-nhap", [ImportOrderController::class, 'index'])
    ->any("/admin/quan-ly-don-hang-nhap/them-don-hang-nhap", [ImportOrderController::class, 'addImportOrder'])
    ->any("/admin/quan-ly-don-hang-nhap/chi-tiet-don-hang-nhap", [ImportOrderController::class, 'editImportOrder'])
    //Quản lý đơn hàng bán
    ->get("/admin/quan-ly-don-hang-ban", [SaleOrderController::class, "index"])
    ->any("/admin/quan-ly-don-hang-ban/chi-tiet-don-hang-ban", [SaleOrderController::class, "editSaleOrder"])
    //Quản lý nhà cung cấp
    ->get("/admin/quan-ly-nha-cung-cap", [SupplierController::class, 'index'])
    ->any("/admin/quan-ly-nha-cung-cap/them-nha-cung-cap", [SupplierController::class, 'addSupplier'])
    ->any("/admin/quan-ly-nha-cung-cap/chinh-sua-nha-cung-cap", [SupplierController::class, 'editSupplier'])



//Client
    //Trang chủ
    ->get("/", [HomeController::class, 'index'])
    ->get("/trang-chu", [HomeController::class, 'index'])
    //Tài khoản
    ->any("/tai-khoan", [CustomerController::class, 'login'])
    ->any("/tai-khoan/dang-nhap", [CustomerController::class, 'login'])
    ->any("/tai-khoan/dang-ky", [CustomerController::class, 'signUp'])
    ->get("/tai-khoan/dang-xuat", [CustomerController::class, "logout"])
    //Cửa hàng
    ->get("/cua-hang", [BookController::class, 'displayStore'])
    ->get("/chi-tiet-sach", [BookController::class, 'viewBookDetail'])
    //Liên lạc
    ->any("/lien-lac", [FeedbackController::class, 'contact'])
    //Giỏ hàng
    ->any("/gio-hang", [CartController::class, 'index'])
    ->get("/them-vao-gio-hang", [CartController::class, 'addtoCart'])
    ->post("/thanh-toan", [CartController::class, 'checkout']);


$app = new App(
    $router, 
    $_SERVER['REQUEST_URI'], 
    $_SERVER['REQUEST_METHOD']);
    
$app->run();
