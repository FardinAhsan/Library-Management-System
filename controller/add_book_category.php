<?php
include_once "../Model/Books.php";

$obj = new Books();
$obj->AddBookCategory($_POST['cat_name']);

header("Location: ../view/Admin/Book/add_book_category.php");