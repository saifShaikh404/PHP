<?php

// Eg of Array and Function
// $arr = array(1, 2, 3, 4);

// function sum($val){
//     $sum = 0;
//     foreach($val as $value){
//         $sum += $value;
//     }

//     return $sum;
// }

// $avg = sum($arr);
// echo $avg;


//Eg of Associative Array
$arr = array('saif' => 'One', 'akif' => 'Two', 'altamas' => 'Three', 4 => 'Four', 'five' => 5, 6 => 6);

// echo $arr['saif'] . "<br>";
// echo $arr[4] . "<br>";
// echo $arr[6] . "<br>";
// echo $arr['five'] . "<br>";

foreach ($arr as $key => $value) {
    echo 'The value of ' . $key . ' is ' . $value . '<br>'; 
}

?>