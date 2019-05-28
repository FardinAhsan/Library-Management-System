<?php
include_once "../Model/Writer.php";
$obj= new Writer();

$obj->AddWriter($_POST['writer_name']);

header("Location: ../view/Admin/Writer/add_writer.php");