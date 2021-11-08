<?php

use Core\Session;
use Core\View;

class CartController {
    public $bookModel;
    public $saleOrderModel;

    function __construct()
    {
        $this->bookModel = new BookModel;
        $this->saleOrderModel = new SaleOrderModel;
    }

    function index($request) {
        $books = [];        

        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if ($_SESSION['cart']) {
                Session::checkClientLogin();
                $n = (count($request) - 1)/2;
                for($i=0;$i<$n;$i++) {
                    $data[] = [$request['id'.$i], $request['amount'.$i]];
                }
                $status = $this->saleOrderModel->addSaleOrder(
                    $_SESSION['account_id'],
                    $request['address'],
                    $data,
                );
                $_SESSION['cart'] = [];
            } else {
                $status = false;
            }
        }
        
        if (isset($_SESSION['cart'])) {
            foreach($_SESSION['cart'] as $id) {
                $book = $this->bookModel->getBookbyId($id);
                $books[] = $book;
            }
        }
        echo View::make("cart/index", ["books"=>$books, 'status'=>$status ?? null]);
    }

    function addtoCart($request) {
        if (isset($request['id'])) {
            if (!in_array($request['id'], $_SESSION['cart'])) {
                $_SESSION['cart'][] = $request['id'];
            }
        }
        $id = $request['id'];
        header("Location: /chi-tiet-sach?id=$id");
    }

    function checkout($request) {

    }

    function deleteCart($request) {
        if (isset($request['id'])) {
            
        }
        header("Location: /gio-hang");
    }
}