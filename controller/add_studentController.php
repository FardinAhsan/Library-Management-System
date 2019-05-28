<?php
session_start();



include_once "../Model/Student.php";

$obj= new Student();
$checkStdEmail=$obj->checkStudent($_POST['email']);

if ($checkStdEmail ==true){
    if (isset($_FILES['photo']['name'])){

        $pic_name=time().$_FILES['photo']['name'];
        $present_location=$_FILES['photo']['tmp_name'];
        move_uploaded_file($present_location,'../photos/student/'.$pic_name);
        $_POST['photo']=$pic_name;
    }
    $last_id=$obj->getLastId();

    $generate_id=1000;

    $std_id=$generate_id.$last_id+1;

    $_POST['std_id']=$_POST['dept'].$std_id;

    $_POST['status']=0;
    $_POST['password']="23456";
    $obj->store($_POST);
    $_SESSION['Message']=1;

    header("Location: ../view/Admin/Student/add_student.php");
}else{
    echo "This Email is available";
}