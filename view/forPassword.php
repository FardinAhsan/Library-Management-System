<?php
if (!isset($_SESSION)) session_start();

include_once "../Model/Student.php";
include_once "../Model/Teacher.php";

//var_dump($_SESSION);
//die();
if ($_SESSION['role'] == "Student"){
    $std = new Student();
    $student=$std->view($_SESSION['std_id']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="../Theme/assets/styles.css" rel="stylesheet">
    <title>Register</title>
</head>
<body>

<div class="container">
    <div class="heading justify-content-center text-center">
        <h1>Library Management System </h1>
        <span>AN AUTOMATED MANAGEMENT SYSTEM</span>
    </div>
    <div class="login-form justify-content-center col-md-6 offset-md-3">
        <form action="../controller/" method="post">
            <h1>Register Info</h1>
            <div class="form-group">
                <input type="text" name="name" class="form-control" disabled value="<?php echo $student['full_name']?>" />
            </div>
            <div class="form-group">
                <input type="text" name="id" class="form-control" disabled value="<?php echo $student['std_id']?>" />
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" disabled value="<?php echo $student['email']?>" />
            </div>
            <div class="form-group">
                <input type="password" name="password" required class="form-control" placeholder="Enter Password" />
            </div>
            <div class="form-group">
                <input type="password" name="password1" required class="form-control" placeholder="Confirm Password" />
            </div>
            <button type="submit" class="btn btn-warning btn-lg">Register</button>
        </form>
    </div>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>