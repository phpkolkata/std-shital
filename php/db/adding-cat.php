<?php
require("db.php");

extract($_POST);

// print_r($_POST);

$sql = "insert into category values(null, '$nm', '$isact')";
$res = mysqli_query($con, $sql);

header("location:category.php?msg=record added!");