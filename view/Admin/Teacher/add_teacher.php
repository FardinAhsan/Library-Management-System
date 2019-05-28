<!DOCTYPE html>
<html lang="en">
<?php include_once "../../head.php" ?>

<body>

<section id="container" style="height: 94vh">
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
                    Add Teacher
                </h1>
            </div>
            <div class="row">
                <div class="message col-md-12">
                    <div class="alert alert-warning col-md-4 col-md-offset-4 text-center" id="alert-msg" style="display: none" role="alert">
                        <strong>Failed!</strong> You Can not Use any tag or spacial characters.
                    </div>
                </div>
                <form class="form-inline" role="form" action="../../../controller/add_teacherController.php" method="post" enctype="multipart/form-data" onsubmit="return valid()">
                    <div class="form-group col-md-2" style="padding: 5px">
                        <label class="col-sm-10 control-label no-padding-right">First Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" style="width: 100%" name="first_name" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group col-md-2" style="padding: 5px">
                        <label class="col-sm-10 control-label no-padding-right">Middle Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" style="width: 100%" name="middle_name" placeholder="Middle Name">
                        </div>
                    </div>
                    <div class="form-group col-md-2" style="padding: 5px">
                        <label class="col-sm-10 control-label no-padding-right">Last Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" style="width: 100%" name="last_name" placeholder="last Name">
                        </div>
                    </div>
                    <div class="form-group col-md-3" style="padding: 5px">
                        <label class="col-sm-10 control-label no-padding-right">Mobile No</label>

                        <div class="col-sm-12">
                            <input type="text" class="form-control" style="width: 100%" name="mobile_no" placeholder="Mobile No">
                        </div>
                    </div>
                    <div class="form-group col-md-3" style="padding: 5px">
                        <label class="col-sm-10 control-label no-padding-right">Email</label>

                        <div class="col-sm-12">
                            <input type="email" class="form-control" style="width: 100%" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group col-md-4" style="padding: 5px">
                        <label class="col-sm-10 control-label no-padding-right">Department</label>

                        <div class="col-sm-12">
                            <input type="text" class="form-control" style="width: 100%" name="dept" placeholder="Department">
                        </div>
                    </div>
                    <div class="form-group col-md-4" style="padding: 5px">
                        <label class="col-sm-10 control-label no-padding-right">Joining Date</label>

                        <div class="col-sm-12">
                            <input type="date" class="form-control" style="width: 100%" name="joining_date">
                        </div>
                    </div>
                    <div class="form-group col-md-4" style="padding: 5px">
                        <label class="col-sm-10 control-label no-padding-right">Photos</label>

                        <div class="col-sm-12">
                            <input type="file" class="form-control" style="width: 100%" name="photo">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" style="margin-left: 20px; border-radius: 15px">Add Teacher</button>
                    <script>

                        function valid() {
                            var userdata=document.getElementsByClassName("form-control");
                            var ridirect=true;


                            for(i=0;i<userdata.length;i++){
                                if(userdata[i].value.match(/([<])/)== null){
                                    ridirect=true;

                                }else {


                                    var divShow= document.getElementById("alert-msg");
                                    divShow.style.display="block";

                                    setTimeout(function () {
                                        $('#alert-msg').fadeOut('slow');
                                    },2000);

                                    ridirect=false;
                                    break;

                                }

                            }
                            return ridirect;

                        }
                    </script>
                    <script>
                        setTimeout(function () {
                            $('#show').fadeOut('slow');
                        },2000)
                    </script>
                </form>
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


</body>
</html>
