<?php

$server = "localhost";
$uid = "root";
$pwd = "";
$db = "newdb";

$con = mysqli_connect($server, $uid, $pwd, $db);

$name = "Raju";
$grade = "B";
$gender = "gmale";

$value = "INSERT INTO `student` (`Name`, `grade`, `gender`) VALUES ('$name', '$grade', '$gender')";
mysqli_query($con, $value);

?>