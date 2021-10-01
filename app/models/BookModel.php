<?php

use Core\Model;

class BookModel extends Model
{
    function addBook(
        string $name,
        int $genreId,
        string $author,
        string $price,
        string $content,
        string $image,
        int $status
    ) {
        if (
            empty($name) || empty($author) || $genreId === "" ||
            $price === "" || empty($content) || $status === "" ||
            empty($image)
        ) return false;

        $insert = "insert into book(name,genre_id,author, price, content, image, status)  
                   values('$name', $genreId, '$author', '$price', '$content', '$image', $status)";
        return  $this->insert($insert);
    }

    function updateBook(
        int $id,
        string $name,
        int $genreId,
        string $author,
        string $price,
        string $content,
        string $image = "",
        int $status = 0
    ) {
        $update_image = $image ? ",image='$image'" : "";

        if (
            empty($name) || empty($author) || $genreId === "" ||
            $price === "" || empty($content) || $status === "" ||
            $id === ""
        ) return false;

        $update = "update book set 
                   name='$name',
                   genre_id=$genreId,
                   author='$author',
                   price='$price',
                   content='$content',
                   status=$status
                   $update_image   
                   where id=$id";

        return $this->update($update);

    }

    function getBookList()
    {
        $select = "SELECT book.id, book.name, genre.name as genre_name, author, price, content, amount, image, book.status FROM book, genre WHERE genre_id = genre.id ORDER BY book.update_at desc";

        return $this->select($select);
    }

    function getBookbyId($id)
    {
        $select = "select * from book where id=$id";

        return $this->select($select)[0];
    }
}
