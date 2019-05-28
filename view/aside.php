<?php
include_once "templateurl.php";
?>

<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="profile.html"><img src="<?php echo url?>assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered">Marcel Newman</h5>

            <li class="mt">
                <a class="active" href="<?php echo tempUrl?>index.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-users"></i>
                    <span>Student</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?php echo tempUrl?>Student/add_student.php">Add Student</a></li>
                    <li><a  href="<?php echo tempUrl?>Student/show_student.php">Show Student</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-user"></i>
                    <span>Teacher</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?php echo tempUrl?>Teacher/add_teacher.php">Add Teacher</a></li>
                    <li><a  href="<?php echo tempUrl?>Teacher/show_teacher.php">Show Teacher</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-book"></i>
                    <span>Book</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?php echo tempUrl?>Book/add_book_category.php">Add Book Category</a></li>
                    <li><a  href="<?php echo tempUrl?>Book/add_book_information.php">Add Book Information</a></li>
                    <li><a  href="<?php echo tempUrl?>Book/showBook.php">Show Book Information</a></li>
                </ul>
            </li>
            <li class="">
                <a href="<?php echo tempUrl?>Publisher/add_publisher.php" >
                    <i class="fa fa-bank"></i>
                    <span>Publisher</span>
                </a>
            </li>
            <li class="">
                <a href="<?php echo tempUrl?>Writer/add_writer.php" >
                    <i class="fa fa-pencil"></i>
                    <span>Writer</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Charts</span>
                </a>
                <ul class="sub">
                    <li><a  href="morris.html">Morris</a></li>
                    <li><a  href="chartjs.html">Chartjs</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>