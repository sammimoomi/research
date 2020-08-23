<?php
$host = "us-cdbr-east-02.cleardb.com";
$username ="bdd9d54a7e1fe7";
$password ="08d623a3";
$database_name = "heroku_4a536962f8b2749";
$table = "research_tb";
$conn= mysqli_connect($host,$username,$password,$database_name) or die("Error: " . mysqli_error($conn));
mysqli_query($conn, "SET NAMES 'utf8' ");
date_default_timezone_set('Asia/Bangkok');
?>  
