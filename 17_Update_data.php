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

$query = "UPDATE `student` SET `grade` = 'A' WHERE `Name` = 'akif'";
$result = mysqli_query($con, $query);
$aff = mysqli_affected_rows($con);

if($result){
    echo "Data Updated!! No of Rows Affected $aff";
}
else{
    echo "Some error Occured" . mysqli_error();
}

?>