<?php
include_once "DataBase.php";

class Teacher{
    public function checkTeacher($email){

        $obj = new DataBase();
        $DBH =$obj->DBconnection();

        $sql="SELECT count(id) FROM `teachers_info` WHERE `email`=?";

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

        $sql="SELECT id FROM `teachers_info` order by id desc limit 1";

        $prepared=$DBH->prepare($sql);
        $prepared->execute();
        $result=$prepared->fetch(PDO::FETCH_COLUMN);
        return $result;
    }
    public  function store($data){

        $obj = new DataBase();
        $DBH =$obj->DBconnection();

        $sql="INSERT INTO `teachers_info`(`teachers_id`, `first_name`, `middle_name`, `last_name`, `mobile_no`, `email`, `password`, `dept`, `joining_date`, `photo`, `status`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

        $prepared=$DBH->prepare($sql);
        $prepared->bindParam(1,$data['teachers_id']);
        $prepared->bindParam(2,$data['first_name']);
        $prepared->bindParam(3,$data['middle_name']);
        $prepared->bindParam(4,$data['last_name']);
        $prepared->bindParam(5,$data['mobile_no']);
        $prepared->bindParam(6,$data['email']);
        $prepared->bindParam(7,$data['password']);
        $prepared->bindParam(8,$data['dept']);
        $prepared->bindParam(9,$data['joining_date']);
        $prepared->bindParam(10,$data['photo']);
        $prepared->bindParam(11,$data['status']);
        $prepared->execute();
    }

    public function TeacherRegister($id){
        $obj =new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT * FROM `teachers_info` WHERE `teachers_id` = '$id'";
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

    public function TeacherLogin($email, $password){
        $obj =new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT * FROM `teachers_info` WHERE `email`='$email' AND `password`='$password'";
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

    public function showAllTeacher(){
        $obj = new DataBase();
        $DBH =$obj->DBconnection();

        $sql="SELECT * FROM `teachers_info`";

        $prepared=$DBH->prepare($sql);
        $prepared->execute();
        $result=$prepared->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
}