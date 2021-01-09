<?php
$user='root';

$database = "bank_db";

$con = mysqli_connect('localhost:3307','root','','bank_db') or die("Unable to connect");

mysqli_select_db($con,$database) or die("Database not chosen");

?>