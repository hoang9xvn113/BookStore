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
        $bookList = $this->bookModel->getBookList();
        echo View::make('home/index', ['books'=>$bookList]);
    }
}