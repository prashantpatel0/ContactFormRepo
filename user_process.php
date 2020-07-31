<?php

include("dbconnect.php");
$email=$_REQUEST['email'];
$name=$_REQUEST['name'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];
$query=$_REQUEST['query'];
/*
 * Inserting data to table
 * */

$query=mysqli_query($db_connect,"INSERT INTO user (email, name, subject, message, query) VALUES ('$email','$name','$subject','$message','$query')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
header("location:index.php?note=success");