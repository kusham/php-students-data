<?php

//connect with the database
$x = mysqli_connect("localhost", "root", "Kushan12345678");

//connection check
if (!$x) {
    die("connection failed :" . mysqli_connect_error());
 } 
//else {
//     echo "connected successfully...<br>";
// }
