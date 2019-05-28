<?php
session_start();

include_once "../../../Model/Teacher.php";

$obj =new Teacher();
$allTeacher=$obj->showAllTeacher();
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
                    Show Teacher
                </h1>
            </div>
            <div class="row">
                <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Teacher's ID</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                        <th>dept</th>
                        <th>Joining Date</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Teacher's ID</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                        <th>dept</th>
                        <th>Joining Date</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($allTeacher as $teacher){?>
                            <tr>
                                <td><?php echo $teacher->teachers_id?></td>
                                <td><?php echo $teacher->first_name?></td>
                                <td><?php echo $teacher->middle_name?></td>
                                <td><?php echo $teacher->last_name?></td>
                                <td><?php echo $teacher->mobile_no?></td>
                                <td><?php echo $teacher->email?></td>
                                <td><?php echo $teacher->dept?></td>
                                <td><?php echo $teacher->joining_date?></td>
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
