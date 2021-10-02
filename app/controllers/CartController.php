<?php

use Core\Session;
use Core\View;

class CartController {
    public $bookModel;

    function __construct()
    {
        $this->bookModel = new BookModel;
    }

    function index() {
        $books = [];
        if (isset($_SESSION['cart'])) {
            foreach($_SESSION['cart'] as $id) {
                $book = $this->bookModel->getBookbyId($id);
                $books[] = $book;
            }
        }
        echo View::make("cart/index", ["books"=>$books]);
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
        Session::checkClientLogin();
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
        }
        echo View::make("cart/checkout", ['request'=>$request]);
    }
}