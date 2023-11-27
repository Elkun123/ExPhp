<?php
$server=$_SERVER['SERVER_NAME'];
$user="root";
$pass="24082004";
$db="udn";
$con=mysqli_connect($server,$user,$pass,$db);
mysqli_query($con,"set names 'utf8'");
?>