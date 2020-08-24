<?php
$host = "localhost";
$username ="root";
$password ="";
$database_name = "research";
$table = "research_tb";
$conn= mysqli_connect($host,$username,$password,$database_name) or die("Error: " . mysqli_error($conn));
mysqli_query($conn, "SET NAMES 'utf8' ");
date_default_timezone_set('Asia/Bangkok');
?>  
