<?php

$server = "localhost";
$uid = "root";
$pwd = "";
$db = "contactus";

$con = mysqli_connect($server, $uid, $pwd, $db);

$query = "SELECT * FROM `contact`";
$result = mysqli_query($con, $query);

$data = mysqli_num_rows($result);
// echo $data;
// echo "<br>";

if($data > 0){

    // $num = mysqli_fetch_assoc($result);
    // echo var_dump($num);
    // echo "<br>";

    // $num = mysqli_fetch_assoc($result);
    // echo var_dump($num);
    // echo "<br>";

    // $num = mysqli_fetch_assoc($result);
    // echo var_dump($num);
    // echo "<br>";

    // $num = mysqli_fetch_assoc($result);
    // echo var_dump($num);
    // echo "<br>";

    while($num = mysqli_fetch_assoc($result)){
        // echo $num; // This wont work
        // echo var_dump($num);
        echo $num["srno"] . ". Hello " . $num["Name"] . " ! Your Email is " . $num["Email"] . "<br>Your desc is :- " . $num["Desc"];
        echo "<br><br>";
    }
}

?>