<?php

class ApiController
{
    public $bookModel;

    function __construct()
    {
        $this->bookModel = new BookModel;
    }

    function getBookbyId($request) {
        $book = $this->bookModel->getBookbyId($request['id']);
        echo json_encode($book);
    }
}
