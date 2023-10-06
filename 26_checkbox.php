<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkbox btn</title>
</head>
<body>
  <form action="/saif/26_checkbox.php" method="post">
    <!-- Method 1 -->
    <!-- <input type="checkbox" name="fruits[]" value="Apple">Apple <br>
    <input type="checkbox" name="fruits[]" value="Mango">Mango <br>
    <input type="checkbox" name="fruits[]" value="Banana">Banana <br> -->

    <!-- Method 2 -->
    <input type="checkbox" name="apple" value="Apple">Apple <br>
    <input type="checkbox" name="mango" value="Mango">Mango <br>
    <input type="checkbox" name="banana" value="Banana">Banana <br>
    <input type="submit" name="sel" value="Result">
  </form>  
</body>
</html>

<?php 

if(isset($_POST['sel'])){
    // Method 1
    // $fruits = $_POST['fruits'];
    // echo $fruits[0] . "<br>";
    // echo $fruits[1] . "<br>";
    // echo $fruits[2] . "<br>";

    if(isset($_POST['apple'])){
        echo 'Apple <br>';
    }
    if(isset($_POST['mango'])){
        echo 'Mango <br>';
    }
    if(isset($_POST['banana'])){
        echo 'Banana <br>';
    }
    if(empty($_POST['apple'])){
        echo 'No Apple 4 u <br>';
    }
    if(empty($_POST['mango'])){
        echo 'No Mango 4 u <br>';
    }
    if(empty($_POST['banana'])){
        echo 'No Banana 4 u <br>';
    }
}

?>