<?php

include_once "DataBase.php";

class Student{

    public function checkStudent($email){

        $obj = new DataBase();
        $DBH =$obj->DBconnection();

        $sql="SELECT count(id) FROM `student_info` WHERE `email`=?";

        $prepared=$DBH->prepare($sql);
        $prepared->bindParam(1,$email);

        $prepared->execute();

        $result=$prepared->fetch(PDO::FETCH_COLUMN);
        if ($result=='0'){

            return true;
        }
        else{
            return false;
        }
    }

    public  function getLastId(){

        $obj = new DataBase();
        $DBH =$obj->DBconnection();

        $sql="SELECT id FROM `student_info` order by id desc limit 1";

        $prepared=$DBH->prepare($sql);
        $prepared->execute();
        $result=$prepared->fetch(PDO::FETCH_COLUMN);
        return $result;
    }
    public  function store($data){

        $obj = new DataBase();
        $DBH =$obj->DBconnection();

        $sql="INSERT INTO `student_info`(`std_id`, `full_name`, `mobile_no`, `email`, `password`, `dept`, `batch`, `session`, `shift`, `program`, `photos`, `status`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

        $prepared=$DBH->prepare($sql);
        $prepared->bindParam(1,$data['std_id']);
        $prepared->bindParam(2,$data['full_name']);
        $prepared->bindParam(3,$data['mobile_no']);
        $prepared->bindParam(4,$data['email']);
        $prepared->bindParam(5,$data['password']);
        $prepared->bindParam(6,$data['dept']);
        $prepared->bindParam(7,$data['batch']);
        $prepared->bindParam(8,$data['session']);
        $prepared->bindParam(9,$data['shift']);
        $prepared->bindParam(10,$data['program']);
        $prepared->bindParam(11,$data['photo']);
        $prepared->bindParam(12,$data['status']);
        $prepared->execute();
    }
    public function StudentLogin($email, $password){
        $obj =new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT * FROM `student_info` WHERE `email`='$email' AND `password`='$password'";
        $conn = $DBH->query($sql);
        $conn->setFetchMode(PDO::FETCH_ASSOC);
        $conn->fetchAll();
        $count= $conn->rowCount();

        if ($count > 0){
            return TRUE;
        }
        else{
            return FALSE;
        }

    }
    public function studentRegister($std_id){
        $obj =new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT * FROM `student_info` WHERE `std_id`='$std_id'";

        $conn = $DBH->query($sql);
        $conn->setFetchMode(PDO::FETCH_ASSOC);
        $conn->fetchAll();
        $count= $conn->rowCount();

        if ($count > 0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function showAllStudent(){
        $obj = new DataBase();
        $DBH =$obj->DBconnection();

        $sql="SELECT * FROM `student_info`";

        $prepared=$DBH->prepare($sql);
        $prepared->execute();
        $result=$prepared->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function view($sessionData){
        $obj = new DataBase();
        $DBH =$obj->DBconnection();

        $sql = "SELECT * FROM `student_info` WHERE `std_id` ='$sessionData'";
        $conn = $DBH->prepare($sql);
        $conn->setFetchMode(PDO::FETCH_ASSOC);
        $conn->execute();
        $result=$conn->fetch();

        return $result;
    }

}