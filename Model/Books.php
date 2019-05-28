<?php
include_once "DataBase.php";
class Books{

    public function AddBookCategory($cat_name){

        $obj = new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "INSERT INTO `books_category`(`cat_name`) VALUES (?)";
        $conn = $DBH->prepare($sql);
        $conn->bindParam(1,$cat_name);
        $conn->execute();
    }

    public function showBookCategory($item){
        $obj = new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT * FROM `books_category` LIMIT $item";
        $conn = $DBH->prepare($sql);
        $conn->execute();
        $allBooks= $conn->fetchAll(PDO::FETCH_OBJ);

        return $allBooks;
    }
    public function showBook(){
        $obj = new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT * FROM `books_category`";
        $conn = $DBH->prepare($sql);
        $conn->execute();
        $allBooks= $conn->fetchAll(PDO::FETCH_OBJ);

        return $allBooks;
    }
    public function countCategory(){
        $obj = new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT COUNT(*) FROM `books_category`";
        $conn = $DBH->prepare($sql);
        $conn->execute();
        $allBooks= $conn->fetch(PDO::FETCH_COLUMN);

        return $allBooks;
    }

    public function showBookPagination($start, $item){
        $obj = new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT * FROM `books_category` LIMIT $start, $item";
        $conn = $DBH->prepare($sql);
        $conn->execute();
        $allBooks= $conn->fetchAll(PDO::FETCH_OBJ);

        return $allBooks;
    }

    public function addBookInformation($data){
        $obj = new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "INSERT INTO `book`(`book_name`, `sbn`, `book_cat`, `publisher_id`, `writer_id`, `quantity`, `publishing_year`, `description`, `pdf_link`) VALUES (?,?,?,?,?,?,?,?,?)";
        $conn = $DBH->prepare($sql);
        $conn ->bindParam(1,$data['book_title']);
        $conn ->bindParam(2,$data['sbn']);
        $conn ->bindParam(3,$data['book_cat']);
        $conn ->bindParam(4,$data['publisher_id']);
        $conn ->bindParam(5,$data['writer_id']);
        $conn ->bindParam(6,$data['quantity']);
        $conn ->bindParam(7,$data['publishing_year']);
        $conn ->bindParam(8,$data['description']);
        $conn ->bindParam(9,$data['pdf_link']);
        $conn->execute();
    }

    public function showAllBooks(){
        $obj = new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT book.book_name,book.sbn, book.quantity,book.publishing_year,book.description,book.pdf_link, books_category.cat_name,publisher.publisher_name,writer.writer_name FROM book,books_category,publisher,writer WHERE book.`book_cat`= books_category.cat_id AND book.`publisher_id`= publisher.id AND book.`writer_id`= writer.id ";
        $conn = $DBH->prepare($sql);
        $conn->execute();
        $allBooks= $conn->fetchAll(PDO::FETCH_OBJ);

        return $allBooks;
    }

}