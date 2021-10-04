<?php

use Core\View;

class GenreController
{

    public $genreModel;

    function __construct()
    {
        $this->genreModel = new GenreModel;
    }

    function index() {
        $genreList = $this->genreModel->getGenreList();
        echo View::make("admin/genre/genre-management", ['data'=>$genreList]);
    }

    function addGenre($request) {
        $data = [];
        if ($request != []) {
            $bookAddStatus = $this->genreModel->addGenre($request['genreName'], $request['genreStatus']);
            $data['status'] = $bookAddStatus;
        }
        echo View::make("admin/genre/add-genre", $data);
    }

    function editGenre($request) {
        if (isset($request['id'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $status = $this->genreModel->editGenre($request['id'], $request['genreName'], $request['genreStatus']);
            }
            $genreInfo = $this->genreModel->getGenreById($request['id']);
            if ($genreInfo) {
                echo View::make("admin/genre/edit-genre", ['data'=>$genreInfo, 'status'=>$status ?? null]);
                return;
            }
        }

        header("Location: /admin/quan-ly-the-loai");
    }

    function deleteGenre($request) {
        if (isset($request['id'])) {
            $status = $this->genreModel->deleteGenre($request['id']);
        }
        header("Location: /admin/quan-ly-the-loai");
    }
}
