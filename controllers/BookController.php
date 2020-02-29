<?php

class BookController
{

    public static function saveBook(Book $book)
    {

        $conection = Database::connect();

        $query = $conection->prepare("INSERT INTO books(title, resume, price, cover, category_id) VALUES (:title, :resume, :price, :cover, :category)");

        $coverPath = UploadFile::uploadFiles($book->getCover());

        if ($coverPath) {

            $query->bindValue(':title', $book->getTitle());
            $query->bindValue(':resume', $book->getResume());
            $query->bindValue(':price', $book->getPrice());
            $query->bindValue(':cover', $coverPath);
            $query->bindValue(':category', $book->getCategory()->getName());

            $insertValue = $query->execute();

            return $insertValue;

        } else {
            return null;
        }

    }

    public static function findBookById(string $id)
    {

        $conection = Database::connect();

        $query = $conection->prepare("SELECT * FROM books WHERE id = :id");

        $query->bindValue(':id', $id);
        $query->execute();
        $data = $query->fetch(PDO::FETCH_ASSOC);

        if ($data) {

            //new cat
            $category = new Category($data['category_id']);
            //New book
            $book = new Book($data['title'],
                $data['resume'],
                $data['cover'],
                $data['price'],
                $category,
                $data['id']);

            return $book;

        }

        return null;

    }

    public static function updateBook(Book $book)
    {

        $conection = Database::connect();

        $query = $conection->prepare('UPDATE books SET title = :title, resume = :resume, price = :price, cover = :cover, category_id= :category WHERE id =:id');

        $coverPath = UploadFile::uploadFiles($book->getCover());

        if ($coverPath) {

            $query->bindValue(':title', $book->getTitle());
            $query->bindValue(':resume', $book->getResume());
            $query->bindValue(':price', $book->getPrice());
            $query->bindValue(':cover', $coverPath);
            $query->bindValue(':category', $book->getCategory()->getName());
            $query->bindValue(':id', $book->getId());

            $insertValue = $query->execute();

            return $insertValue;

        } else {
            return null;
        }

    }

    public static function deleteBook($id, $cover)
    {

        $conection = Database::connect();

        $deleteCover = UploadFile::deleteFile($cover);

            if ($deleteCover) {

            $query = $conection->prepare('DELETE FROM books WHERE id =:id');
            $query->bindValue(':id', $id);
            $deleteValue = $query->execute();
            return true;
        }
       
        return false;

    }

    public static function listAllBooks() {

        $conection = Database::connect();
        $query = $conection->prepare('SELECT * FROM books');

        $query->execute();

        //$books = $query->fetchAll(PDO::FETCH_CLASS, 'Book');
        $books = $query->fetchAll(PDO::FETCH_ASSOC);

        return $books;
    }


}
