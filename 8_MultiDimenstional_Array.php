<?php

$value1 = array(array( 17, 21, 35),
                array( 52, 64, 34),
                array( 19, 60, 9));

$value2 = array(array( 36, 42, 32),
                array( 13, 23, 42),
                array( 25, 9, 60));

echo 'Sum of 2 Matrix <br>';
for($i = 0; $i < count($value1); $i++){
    echo '| ';
    for ($j=0; $j < count($value1[$i]); $j++) { 
        echo ($value1[$i][$j] + $value2[$i][$j]) . ' ';
    }
    echo ' |';
    echo '<br>';
}

?>