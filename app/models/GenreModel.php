<?php

use Core\Model;

class GenreModel extends Model {

    function getGenreList(): array {
        $select = "select * from genre";
        return $this->select($select);
    }

    function getGenreById($id): array {
        $select = "select * from genre where id=$id";
        return $this->select($select)[0];
    }

    function addGenre(string $genreName, int $genreStatus=0): bool {
        $insert = "insert into genre(name, status) values('$genreName', $genreStatus)";
        return $this->insert($insert);
    }

    function editGenre(int $genreId, string $genreName, int $genreStatus = 0): bool {
        $update = "update genre set name='$genreName', status=$genreStatus where id=$genreId";
        return $this->update($update);
    }

    function deleteGenre($id) {
        if ($id === "") {
            return false;
        }
        $update = "update genre set status = 0 where id=$id";
        return $this->update($update);
    }
}