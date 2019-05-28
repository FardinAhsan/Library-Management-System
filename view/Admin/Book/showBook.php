<?php
session_start();

include_once "../../../Model/Books.php";
$obj = new Books();
$allBooks = $obj->showAllBooks();


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
                    Show Book
                </h1>
            </div>
            <div class="row">
                <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Book Title</th>
                        <th>SBN</th>
                        <th>Category Name</th>
                        <th>Publisher Name</th>
                        <th>Writer Name</th>
                        <th>Quantity</th>
                        <th>Publishing Year</th>
                        <th>Description</th>
                        <th>PDF Link</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Book Title</th>
                        <th>SBN</th>
                        <th>Category Name</th>
                        <th>Publisher Name</th>
                        <th>Writer Name</th>
                        <th>Quantity</th>
                        <th>Publishing Year</th>
                        <th>Description</th>
                        <th>PDF Link</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php foreach ($allBooks as $singleBook){?>
                    <tr>
                        <td><?php echo $singleBook->book_name?></td>
                        <td><?php echo $singleBook->sbn?></td>
                        <td><?php echo $singleBook->cat_name?></td>
                        <td><?php echo $singleBook->publisher_name?></td>
                        <td><?php echo $singleBook->writer_name?></td>
                        <td><?php echo $singleBook->quantity?></td>
                        <td><?php echo $singleBook->publishing_year?></td>
                        <td><?php echo $singleBook->description?></td>
                        <td><?php echo $singleBook->pdf_link?></td>
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
