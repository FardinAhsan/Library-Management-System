<!DOCTYPE html>
<html lang="en">
<?php include_once "template_lay/head.php" ?>
<style>
    .lectures{
        background: #fff;
        box-sizing: border-box;
        -webkit-box-shadow: 2px 2px 4px 5px #ccc;
        -moz-box-shadow:    2px 2px 4px 5px #ccc;
        box-shadow:         2px 2px 4px 5px #ccc;
    }
    nav {}
    nav ul{
        margin: 0;
        padding: 0;
        list-style: none;
    }
    nav ul li{
        border: 1px solid #a4abbb;
        border-radius: 5px;
        min-height: 80px;
    }
    .serial{
        border-right: 2px solid #a4abbb;
        line-height: 34px;
        font-size: 21px;
        text-align: right;
        margin-top: 12px;
    }

</style>
<body>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php include_once "template_lay/header.php" ?>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <?php include_once "template_lay/aside.php" ?>
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content" style="min-height: 95vh">
        <section class="wrapper">
            <div class="page-header">
                <h2>
                    <i class="fa fa-angle-right"></i> Show Lecture
                </h2>
            </div>
            <div class="row">
                <div class="content col-lg-12">


                    <div class="lectures col-lg-12" style="min-height: 60vh">
                        <h3>
                            <i class="fa fa-angle-right"></i> All Lecture
                        </h3>
                        <nav>
                            <ul>
                                <li>
                                    <div class="serial col-lg-1">
                                        <p>1</p>
                                    </div>
                                    <div class="file-name col-lg-9">
                                        <h4>Computer Fundamentals</h4>
                                        <span>17days 23hours 19minutes ago</span>
                                    </div>
                                    <div class="options col-lg-2">
                                        <h5>Uploaded By A A Q</h5>
                                        <span><a href="">Click here to show pdf or download</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="serial col-lg-1">
                                        <p>2</p>
                                    </div>
                                    <div class="file-name col-lg-9">
                                        <h4>Computer Fundamentals</h4>
                                        <span>17days 23hours 19minutes ago</span>
                                    </div>
                                    <div class="options col-lg-2">
                                        <h5>Uploaded By A A Q</h5>
                                        <span><a href="">Click here to show pdf or download</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="serial col-lg-1">
                                        <p>3</p>
                                    </div>
                                    <div class="file-name col-lg-9">
                                        <h4>Computer Fundamentals</h4>
                                        <span>17days 23hours 19minutes ago</span>
                                    </div>
                                    <div class="options col-lg-2">
                                        <h5>Uploaded By A A Q</h5>
                                        <span><a href="">Click here to show pdf or download</a></span>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!--main content end-->
    <!--footer start-->
    <?php include_once "template_lay/footer.php" ?>
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<?php include_once "template_lay/script.php" ?>


</body>
</html>
