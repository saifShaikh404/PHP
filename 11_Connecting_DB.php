<?php

//There are many ways you can connect db
//Only one way is describe here

// Thats a default server, uid and pass generated by xampp
$server = "localhost";
$username = "root";
$pass = "";

$con = mysqli_connect($server, $username, $pass);
if($con){
    echo "DB is Connected";
}else{
    die("Some error occured" . mysqli_connect_error());
}

?>