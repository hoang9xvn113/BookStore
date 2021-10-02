<?php

use Core\Helper;
use Core\View;

class BookController
{

    public $bookModel;
    public $genreModel;

    function __construct()
    {
        $this->bookModel = new BookModel;
        $this->genreModel = new GenreModel;
    }


    function index() {
        $bookList = $this->bookModel->getBookList();
        echo View::make("admin/book/book-management", ["bookList"=>$bookList]);
    }

    function editBookInfo($request) {
        if ($request['id']) {
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (isset($request['bookImage'])){
                    $image = Helper::dowloadImage($request['bookImage']);
                }
                $status = $this->bookModel->updateBook(
                    $request['id'],
                    $request['bookName'],
                    $request['genreId'],
                    $request['bookAuthor'],
                    $request['bookPrice'],
                    $request['bookContent'],
                    $image ? $image : "",
                    $request['bookStatus'],
                );
            }
            $book = $this->bookModel->getBookbyId($request['id']);
            $genreList = $this->genreModel->getGenreList();
            if ($book) {
                echo View::make("admin/book/edit-book", ['status'=>$status ?? null, 'book'=>$book, 'genreList'=>$genreList]);
                return;
            }
        }

        header("Location: /admin/quan-ly-sach");

    }

    function addBook($request) {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $image = Helper::dowloadImage($request['bookImage']);
            if ($image) {
                $status = $this->bookModel->addBook(
                    $request['bookName'],
                    $request['genreId'],
                    $request['bookAuthor'],
                    $request['bookPrice'],
                    $request['bookContent'],
                    $image,
                    $request['bookStatus'],
                );
            } else {
                $status = false;
            }
                
        }
        $genreList = $this->genreModel->getGenreList();
        echo View::make("admin/book/add-book", ['status'=>$status ?? null, 'genreList'=>$genreList]);
    }

    function displayStore() {
        $bookList = $this->bookModel->getBookList();
        echo View::make("store/index", ['books'=>$bookList]);
    }

    function viewBookDetail($request) {
        if (isset($request['id'])) {

        
            $book = $this->bookModel->getBookbyId($request['id']);

            if ($book) {
                $increase = $this->bookModel->increaseNumberClick($request['id']);

                $bookRelateList = $this->bookModel->getBookListbyGenreId($request['id'], $book['genre_id']);

                $genreList = $this->genreModel->getGenreList();
                foreach($genreList as $genre) {
                    if ($genre['id'] == $book['genre_id']) {
                        $book['genre_name'] = $genre['name'];
                        break;
                    }
                }
            }

            echo View::make("/store/book-detail", ['book'=>$book, 'bookRelateList'=>$bookRelateList]);
        }
    }
}
