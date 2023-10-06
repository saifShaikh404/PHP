<?php

$server = "localhost";
$uid = "root";
$pwd = "";
$db = "newdb";

$con = mysqli_connect($server, $uid, $pwd, $db);
if(!$con){
    die("DB not Connected . " . mysqli_connect_error());
}
else{
    echo "DB connected <br>";
}

$query = "DELETE FROM `student` WHERE `grade` = 'B' LIMIT 1";
$result = mysqli_query($con, $query);

if($result){
    echo "DB deleted";
}
else{
    echo "Data not found " . mysqli_error();
}


?>