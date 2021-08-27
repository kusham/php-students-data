<?php 
require_once 'connection.php';

$sql_01 = "SELECT * FROM Students_records";
$Students = mysqli_query($x, $sql_01);

//$row = mysqli_fetch_array($Students);

mysqli_close($x);