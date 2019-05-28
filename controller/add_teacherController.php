<?php
include_once "../Model/Teacher.php";

//var_dump($_POST);
//die();

$obj= new Teacher();
$checkTeachersEmail=$obj->checkTeacher($_POST['email']);

if ($checkTeachersEmail ==true){
    if (isset($_FILES['photo']['name'])){

        $pic_name=time().$_FILES['photo']['name'];
        $present_location=$_FILES['photo']['tmp_name'];
        move_uploaded_file($present_location,'../photos/teacher/'.$pic_name);
        $_POST['photo']=$pic_name;
    }
    $last_id=$obj->getLastId();

    $generate_id=10351;

    $std_id=$generate_id.$last_id+1;

    $_POST['teachers_id']=$_POST['dept'].$std_id;

    $_POST['status']=0;
    $_POST['password']="123456";
    $obj->store($_POST);

    header("Location: ../view/Admin/Teacher/add_teacher.php");
}else{
    echo "This Email is available on DB";
}