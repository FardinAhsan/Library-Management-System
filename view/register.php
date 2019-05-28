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
        <form action="../controller/registerController.php" method="post">
            <h1>Register PANEL</h1>
            <div class="form-group">
                <select class="custom-select" name="role" required>
                    <option value="">Choose A Category</option>
                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="id_no" required class="form-control" placeholder="Enter The ID number" />
            </div>
            <button type="submit" class="btn btn-warning btn-lg">Submit</button>

        </form>
    </div>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>