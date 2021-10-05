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

    function increaseNumberClick($id) {
        $update = "update book set number_click = number_click + 1 where id=$id";
        return $this->update($update);
    }

    function searchBookListbyName($name) {
        $select = "SELECT * FROM `book` WHERE name LIKE '%$name%'";
        return $this->select($select);
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
        $select = "SELECT book.id, book.name, genre.name as genre_name, author, price, content, book.amount, image,SUM(sale_order_detail.amount) as saleAmount, number_click, book.status 
        FROM book, genre, sale_order_detail 
        WHERE genre_id = genre.id and book.id = sale_order_detail.book_id 
        group by book_id
        ORDER BY book.update_at desc";

        return $this->select($select);
    }

    function getBookbyId($id)
    {
        $select = "select * from book where id=$id";
        return $this->select($select)[0];
    }

    function getBookListbyGenreId($id, $genreId) {
        $select = "SELECT book.id, book.name, genre.name as genre_name, author, price, content, amount, image, number_click, book.status 
        FROM book, genre 
        WHERE genre_id = genre.id and genre_id=$genreId and id!=$id order by customer.update_at desc";
        return $this->select($select);
    }

    function getBookListbyClick() {
        $select = "SELECT book.id, book.name, genre.name as genre_name, author, price, content, book.amount, image,SUM(sale_order_detail.amount) as saleAmount, number_click, book.status 
        FROM book, genre, sale_order_detail
        WHERE genre_id = genre.id and book.id = sale_order_detail.book_id 
        group by book_id
        order by number_click desc, book.update_at desc";
        return $this->select($select);
    }

    function getBookListbyBestSelling() {
        $select = "SELECT book.id, book.name, genre.name as genre_name, book.author, book.price, book.content, book.amount, book.image, number_click, book.status, SUM(sale_order_detail.amount) as saleAmount
        FROM book,genre, sale_order_detail 
        WHERE genre_id = genre.id and book.id = sale_order_detail.book_id 
        group by book_id
        ORDER BY saleAmount desc ";
        return $this->select($select);
    }

    function deleteBook($id) {
        if ($id === "") {
            return false;
        }
        $update = "update book set status = 0 where id = $id";
        return $this->update($update);
    }


}
