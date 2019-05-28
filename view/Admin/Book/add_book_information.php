<?php

include_once "../../../Model/Books.php";
include_once "../../../Model/Publisher.php";
include_once "../../../Model/Writer.php";

$obj = new Books();
$allcategory =$obj->showBook();

$objPub = new Publisher();
$allPublisher=$objPub->showPublisher();

$objWri = new Writer();
$allWriter=$objWri->showWriter();


?>

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
                <h2>
                    <i class="fa fa-angle-right"></i>Add Book Information
                </h2>
            </div>
            <div class="row">
                <form class="form-inline" action="../../../controller/add_book_information.php" method="post">
                    <div class="form-group col-md-4"  style="padding: 4px; height: 65px">
                        <label class="col-sm-6 control-label no-padding-right">Book Title</label>

                        <div class="col-sm-12">
                            <input type="text" class="form-control" style="width: 100%" name="book_title" placeholder="Book Title">
                        </div>
                    </div>
                    <div class="form-group col-md-4" style="padding: 4px; height: 65px">
                        <label class="col-sm-6 control-label no-padding-right">SBN</label>

                        <div class="col-sm-12">
                            <input type="number" class="form-control" style="width: 100%" name="sbn" >
                        </div>
                    </div>
                    <div class="form-group col-md-4" style="padding: 4px; height: 65px">
                        <label class="col-sm-6 control-label no-padding-right">Book Category</label>

                        <div class="col-sm-12 form-group" >
                            <select name="book_cat" style="width:100%;height: 33px;border-radius: 3px;border: 1px solid #a4abbb;">
                                <option value="">Select Book Category</option>
                                <?php foreach ($allcategory as $category){?>

                                <option value="<?php echo $category->cat_id?>"><?php echo $category->cat_name?></option>

                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-4" style="padding: 5px; height: 65px">
                        <label class="col-sm-6 control-label no-padding-right">Publisher Name</label>

                        <div class="col-sm-12">
                            <select name="publisher_id" style="width:100%;height: 33px;border-radius: 3px;border: 1px solid #a4abbb;">
                                <option value="">Select Publisher</option>
                                <?php foreach ($allPublisher as $publisher){?>

                                    <option value="<?php echo $publisher->id?>"><?php echo $publisher->publisher_name?></option>

                                <?php }?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-4" style="padding: 5px; height: 65px">
                        <label class="col-sm-6 control-label no-padding-right">Writer Name</label>

                        <div class="col-sm-12">
                            <select name="writer_id" style="width:100%;height: 33px;border-radius: 3px;border: 1px solid #a4abbb;">
                                <option value="">Select Writer</option>
                                <?php foreach ($allWriter as $writer){?>

                                    <option value="<?php echo $writer->id?>"><?php echo $writer->writer_name?></option>

                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-2" style="padding: 5px; height: 65px">
                        <label class="col-sm-6 control-label no-padding-right">Quantity</label>

                        <div class="col-sm-12">
                            <input type="text" class="form-control" style="width: 100%" name="quantity" placeholder="Quantity">
                        </div>
                    </div>

                    <div class="form-group col-md-2" style="padding: 5px; height: 65px">
                        <label class="col-sm-12 control-label no-padding-right">Publishig Year</label>

                        <div class="col-sm-12">
                            <input type="text" class="form-control" style="width: 100%" name="publishing_year" placeholder="Publishing Year">
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 5px">
                        <label class="col-sm-6 control-label no-padding-right">Description</label>

                        <div class="col-md-12">
                            <textarea name="description" style="width: 100%;border-radius: 3px;border: 1px solid #a4abbb;"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 5px">
                        <label class="col-sm-12 control-label no-padding-right">PDF link</label>

                        <div class="col-md-12">
                            <input type="text" class="form-control" style="width: 100%" name="pdf_link" placeholder="link">
                        </div>
                    </div>
                    <!---->
                    <button type="submit" name="submit" class="btn btn-primary" style="margin-left: 20px; border-radius: 15px">Student Entry</button>

                </form><!-- /col-lg-3 -->
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
