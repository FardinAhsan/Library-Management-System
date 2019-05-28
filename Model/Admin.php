<?php

include_once "DataBase.php";

class Admin
{
    public function adminLogin($email, $password){
        $obj =new DataBase();
        $DBH=$obj->DBconnection();

        $sql = "SELECT * FROM `admin` WHERE `email`= '$email' AND `password`= '$password'";

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
}