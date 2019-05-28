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
                <a class="active" href="<?php echo tempUrlStu?>index.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="<?php echo tempUrlStu?>BookList.php" >
                    <i class="fa fa-book"></i>
                    <span>Book List</span>
                </a>
            </li>
            <li class="">
                <a href="<?php echo tempUrlStu?>lectures.php" >
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Lectures</span>
                </a>
            </li>
            <li class="">
                <a href="<?php echo tempUrlStu?>" >
                    <i class=" fa fa-cloud-download"></i>
                    <span>Borrow List</span>
                </a>
            </li>
            <li class="">
                <a href="<?php echo tempUrlStu?>" >
                    <i class=" fa fa-cloud-upload"></i>
                    <span>Return List</span>
                </a>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>