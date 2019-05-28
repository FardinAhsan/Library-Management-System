<?php include_once "../../../Model/Books.php";
session_start();

$obj = new Books();
$categoryCount=$obj->countCategory();

if(array_key_exists('item',$_SESSION)){
    if (array_key_exists('item',$_GET)){
   $_SESSION['item']=$_GET['item'];
}
}
else{
    $_SESSION['item']=2;
}
$item=$_SESSION['item'];
if (array_key_exists('page',$_GET)){
    $page_no=$_GET['page'];
}
else{
    $page_no=1;
}

$buttonshow=ceil($categoryCount/$item);
    $start = $item*($page_no-1);
    $allitem= $obj->showBookPagination($start,$item);



?>



<!DOCTYPE html>
<html lang="en">
<?php include_once "../../head.php" ?>

<style>

    .form{
        background: #fff;
        font-size: 16px;
        padding: 20px;
        box-sizing: border-box;
        -webkit-box-shadow: 2px 2px 4px 5px #ccc;
        -moz-box-shadow:    2px 2px 4px 5px #ccc;
        box-shadow:         2px 2px 4px 5px #ccc;
    }
    .form h2{
        margin-bottom: 25px;
    }

</style>
<body>

<section id="container" style="min-height: 130vh">
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
                <h2>
                    <i class="fa fa-angle-right"></i> Add Books Category
                </h2>
            </div>
            <div class="row">
                <div class="message col-md-12">
                    <div class="alert alert-warning col-md-4 col-md-offset-4 text-center" id="alert-msg" style="display: none" role="alert">
                        <strong>Failed!</strong> You Can not Use any tag or spacial characters.
                    </div>
                </div>

                <form action="../../../controller/add_book_category.php" method="post" role="form" class="col-md-6 col-md-offset-3 form" onsubmit="return valid()">
                    <h2><i class="fa fa-angle-right"></i> Books Category</h2>
                    <div class="form-group" style="padding: 25px 5px">
                        <label class="col-md-2">Category</label>

                        <div class="col-md-10">
                            <input type="text" class="form-control" name="cat_name" placeholder="Add Book Category">
                        </div>
                    </div>
                    <div class="form-group" style="padding: 25px 5px;">
                        <label class="col-md-2">Action</label>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-primary" style="border-radius: 25px">Add Category</button>
                        </div>
                    </div>
                    <script>
                        function valid() {
                            var userData = document.getElementsByClassName("form-control");
                            var redirect = true;

                            for (i=0;i<userData.length;i++){
                                if (userData[i].value.match(/([<])/) == null){
                                    redirect = true;
                                }else {
                                    var divShow = document.getElementById("alert-msg");
                                    divShow.style.display="block";

                                    setTimeout(function () {
                                        $("#alert-msg").fadeOut('slow');
                                    },2000);

                                    redirect = false;
                                    break;
                                }
                            }
                            return redirect;
                        }
                    </script>
                </form>

                <!-- /col-lg-3 -->
            </div><! --/row -->
            <hr>
            <div class="page-header">
                <h2>
                    <i class="fa fa-angle-right"></i>Books Category Table
                </h2>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $serial =0; foreach ($allitem as $oneBooks){?>
                        <?php $serial++;?>
                        <tr>
                            <th><?php echo $serial?></th>
                            <td><?php echo $oneBooks->cat_name?></td>
                            <td><button class="btn btn-primary" onclick="window.location.href=''">Edit</button></td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>

                <nav aria-label="Page navigation example" style="text-align: center">
                    <ul class="pagination">
                        <?php for ($i=1; $i<=$buttonshow;$i++){?>
                            <li class="
                                <?php if ($_GET['page'] == $i){
                                    echo 'active';
                            }
                            else{
                                    echo 'page-item';
                            }
                        ?>
"><a class="page-link" href="add_book_category.php?page=<?php echo $i?>"><?php echo $i?></a></li>
                        <?php }?>
                        <select class="form-control" name="item" id="item" onchange="javascript:location.href = this.value;">
                            <?php
                            if($item==3 ) echo '<option value="?item=3" selected >Show 3 Items Per Page</option>';
                            else echo '<option  value="?item=3">Show 3 Items Per Page</option>';

                            if($item==2 ) echo '<option value="?item=2" selected >Show 2 Items Per Page</option>';
                            else echo '<option  value="?item=2">Show 2 Items Per Page</option>';

                            if($item==1 ) echo '<option value="?item=1" selected >Show 1 Items Per Page</option>';
                            else echo '<option  value="?item=1">Show 1 Items Per Page</option>';
                            ?>
                        </select>

                        <!--<select class="form-control">
                            <option <?php /**/?>>1</option>
                            <option >2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>-->
                    </ul>
                </nav>
            </div>

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
