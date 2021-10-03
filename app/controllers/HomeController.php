<?php

use Core\View;

class HomeController {

    public $bookModel;
    public $genreModel;

    function __construct()
    {
        $this->bookModel = new BookModel;
        $this->genreModel = new GenreModel;
    }
    
    public function index() {
        $bestSellingBooks = $this->bookModel->getBookListbyBestSelling();
        $featureBooks = $this->bookModel->getBookListbyClick();
        echo View::make('home/index', [
            'featureBooks'=>$featureBooks,
            'bestSellingBooks'=>$bestSellingBooks
        ]);
    }
}