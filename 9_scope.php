<?php

$a = 10; // Global Variable
$b = 100; // Global Variable

function printVal(){
    // $a = 15; // Local Variable
    global $a, $b; // able to access global variable inside the Function

    $a = 20; // Changed value outside the function as well
    $b = 250; // Changed value outside the function as well

    echo 'The value of a is ' . $a ;
    echo '<br> The value of a is ' . $b ;
}

printVal();
echo "<br>The value of a and b is " . $a . " and " . $b;

echo "<br>";
// echo var_dump($GLOBALS); // Shows all global elements
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);

?>