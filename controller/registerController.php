<?php

if (!isset($_SESSION)) session_start();

include_once "../Model/Student.php";
include_once "../Model/Teacher.php";

if ($_POST['role'] == "Teacher"){
    $obj = new Teacher();
    $teacher=$obj->TeacherRegister($_POST['id_no']);

    if ($teacher){
        $_SESSION['teachers_id'] = $_POST['id_no'];
        $_SESSION['role'] = $_POST['role'];
        header("Location: ../view/forPassword.php");
    }
    else{
        header("Location: ../view/register.php");
    }
}
elseif ($_POST['role'] == "Student"){
    $Std = new Student();
    $student=$Std->studentRegister($_POST['id_no']);
    if ($student){
        $_SESSION['std_id'] = $_POST['id_no'];
        $_SESSION['role'] = $_POST['role'];
        header("Location: ../view/forPassword.php");
    }
    else{
        header("Location: ../view/register.php");
    }
}
else{
    header("Location: ../view/register.php");
}