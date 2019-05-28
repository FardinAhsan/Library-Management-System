<?php
session_start();


include_once "../../../Model/Student.php";

$obj = new Student();
$allStudent=$obj->showAllStudent();


?>
<!DOCTYPE html>
<html lang="en">
<?php include_once "../../head.php" ?>

<body>

<section id="container" style="min-height: 94vh">
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php include_once "../../header.php" ?>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <?php include_once "../../aside.php" ?>
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="page-header">
                <h1>
                    <i class="fa fa-angle-right"></i> Show Student
                </h1>
            </div>
            <div class="row">
                <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>STD ID</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                        <th>DEPT</th>
                        <th>Batch</th>
                        <th>Session</th>
                        <th>Shift</th>
                        <th>Program</th>
                        <th>Reg Date</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>STD ID</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                        <th>DEPT</th>
                        <th>Batch</th>
                        <th>Session</th>
                        <th>Shift</th>
                        <th>Program</th>
                        <th>Reg Date</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($allStudent as $student) {?>
                            <tr>
                                <td><?php echo $student['full_name']?></td>
                                <td><?php echo $student['std_id']?></td>
                                <td><?php echo $student['mobile_no']?></td>
                                <td><?php echo $student['email']?></td>
                                <td><?php echo $student['dept']?></td>
                                <td><?php echo $student['batch']?></td>
                                <td><?php echo $student['session']?></td>
                                <td><?php echo $student['shift']?></td>
                                <td><?php echo $student['program']?></td>
                                <td><?php echo $student['reg_date']?></td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>

                <!-- /col-lg-3 -->
            </div><! --/row -->
        </section>
    </section>

    <!--main content end-->
    <!--footer start-->

    <!--footer end-->
</section>
<?php include_once "../../footer.php" ?>
<!-- js placed at the end of the document so the pages load faster -->
<?php include_once "../../script.php" ?>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
</body>
</html>
