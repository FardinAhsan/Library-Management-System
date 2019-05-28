<?php
include_once "DataBase.php";

class Publisher{

    public function addPublisher($publisher_name){

        $obj = new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "INSERT INTO `publisher`(`publisher_name`) VALUES (?)";
        $conn = $DBH->prepare($sql);
        $conn->bindParam(1,$publisher_name);
        $conn->execute();
    }

    public function showPublisher(){
        $obj = new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT * FROM `publisher`";
        $conn = $DBH->prepare($sql);
        $conn->execute();
        $allPublisher= $conn->fetchAll(PDO::FETCH_OBJ);

        return $allPublisher;
    }
    public function showBookPublisher($item){
        $obj = new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT * FROM `publisher` LIMIT $item";
        $conn = $DBH->prepare($sql);
        $conn->execute();
        $allBooks= $conn->fetchAll(PDO::FETCH_OBJ);

        return $allBooks;
    }
    public function countPublisher(){
        $obj = new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT COUNT(*) FROM `publisher`";
        $conn = $DBH->prepare($sql);
        $conn->execute();
        $allBooks= $conn->fetch(PDO::FETCH_COLUMN);

        return $allBooks;
    }

    public function showPublisherPagination($start, $item){
        $obj = new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT * FROM `publisher` LIMIT $start, $item";
        $conn = $DBH->prepare($sql);
        $conn->execute();
        $allBooks= $conn->fetchAll(PDO::FETCH_OBJ);

        return $allBooks;
    }
}