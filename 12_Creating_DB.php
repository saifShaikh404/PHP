<?php

$server = "localhost";
$username = "root";
$pass = "";

$con = mysqli_connect($server, $username, $pass);
if(!$con){
    die("Some error occured " . mysqli_connect_error());

}else{
    echo "DB is Connected <br>";
}

$newDB = "CREATE DATABASE saif3";
$res = mysqli_query($con, $newDB);

if($res){
    echo "DB created Successfully " . var_dump($res);
}
else {
    echo "DB Already Created " . var_dump($res);
}

?>