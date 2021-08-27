<?php
 require_once 'connection.php';

 
//create database
$sql_01 = "CREATE DATABASE IF NOT EXISTS Students";

if (!mysqli_query($x, $sql_01)) {
    echo "database is not created :" . mysqli_error($x);
} 
// else {
//     echo "Database successfully created..!<br>";
// }

//create Table
$sql_02 = "USE Students";
$sql_03 = "CREATE TABLE IF NOT EXISTS Students_records(
    name VARCHAR(20),
    subject VARCHAR(15),
    level CHAR(8),
    email VARCHAR(50),
    passward VARCHAR(10),
    CONSTRAINT student_PK PRIMARY KEY(email)
)";
$a = mysqli_query($x, $sql_02);

if (!mysqli_query($x, $sql_02) || !mysqli_query($x, $sql_03)) {
    
    echo "Table is not created :" . mysqli_error($x);
}
//  else {
//     echo "Table successfully created..!". $a;
// }


//INsert Data


 $name = $subject = $level = $email = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $level = $_POST["level"];
    $email = $_POST["email"];
    $password = $_POST["password"];
 }


$sql_04 = "INSERT INTO Students_records VALUES('$name' , '$subject' , '$level' , '$email' , '$password' )";

if(!mysqli_query($x, $sql_04)) {
    echo "Data has not Inserted :" . mysqli_error($x);
}


