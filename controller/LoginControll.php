<?php

if (!isset($_SESSION)) session_start();
include_once "../Model/Admin.php";
include_once "../Model/Student.php";
include_once "../Model/Teacher.php";

if ($_POST['role'] == "Admin"){
    $objAdmin = new Admin();
    $Admin=$objAdmin->adminLogin($_POST['email'],$_POST['password']);
    if ($Admin){
        $_SESSION['email'] = $_POST['email'];
        echo "Success";
        header("Location: ../view/Admin/index.php");
    }else{
        echo "Failed";
        header("Location: ../view/login.php");
    }
}
elseif ($_POST['role'] == "Teacher"){
    $objTeacher= new Teacher();
    $Teacher=$objTeacher->TeacherLogin($_POST['email'],$_POST['password']);
    if ($Teacher){
        $_SESSION['email'] = $_POST['email'];
        header("Location: ../view/Admin/teacher.php");
    }else{
        header("Location: ../view/login.php");
    }


}
elseif ($_POST['role'] == "Student"){
    $objStudent = new Student();
    $Student=$objStudent->StudentLogin($_POST['email'],$_POST['password']);
    if ($Student){
        $_SESSION['email'] = $_POST['email'];
        header("Location: ../view/Student/index.php");
    }else{
        header("Location: ../view/login.php");
    }

}
else{
    echo "Failed to login";
    header("Location: ../view/login.php");
}

