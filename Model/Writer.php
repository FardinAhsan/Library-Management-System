<?php
include_once "DataBase.php";

class Writer{

    public function AddWriter($writer_name){

        $obj = new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "INSERT INTO `writer`(`writer_name`) VALUES (?)";
        $conn = $DBH->prepare($sql);
        $conn->bindParam(1,$writer_name);
        $conn->execute();
    }

    public function showWriter(){
        $obj = new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT * FROM `writer`";
        $conn = $DBH->prepare($sql);
        $conn->execute();
        $allWriter= $conn->fetchAll(PDO::FETCH_OBJ);

        return $allWriter;
    }
    public function countWriter(){
        $obj = new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT COUNT(*) FROM `writer`";
        $conn = $DBH->prepare($sql);
        $conn->execute();
        $allBooks= $conn->fetch(PDO::FETCH_COLUMN);

        return $allBooks;
    }

    public function showBookWriter($start, $item){
        $obj = new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT * FROM `writer` LIMIT $start, $item";
        $conn = $DBH->prepare($sql);
        $conn->execute();
        $allBooks= $conn->fetchAll(PDO::FETCH_OBJ);

        return $allBooks;
    }
}