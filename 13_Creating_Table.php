<?php

$server = "localhost";
$username = "root";
$pass = "";
$db = "saif3";

$con = mysqli_connect($server, $username, $pass, $db);

if(!$con){
    die("Some error occured " . mysqli_connect_error());

}else{
    echo "DB is Connected <br>";
}

$newDB = "CREATE TABLE `student` (`sr no` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(15) NOT NULL , `grade` VARCHAR(2) NOT NULL , `gender` VARCHAR(10) NOT NULL , PRIMARY KEY (`sr no`))
";
$res = mysqli_query($con, $newDB);

if($res){
    echo "DB created Successfully " . var_dump($res);
}
else {
    echo "DB Already Created " . var_dump($res);
}

?>