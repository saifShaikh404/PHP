<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio btn</title>
</head>
<body>
  <form action="/saif/25_radiobtn.php" method="post">
    <input type="radio" name="fruits" value="Apple">Apple <br>
    <input type="radio" name="fruits" value="Mango">Mango <br>
    <input type="radio" name="fruits" value="Banana">Banana <br>
    <input type="submit" name="sel" value="Result">
  </form>  
</body>
</html>

<?php

if(isset($_POST["sel"])){

  $fruits = null;
  if(isset($_POST['fruits'])){
      $fruits = $_POST["fruits"];
        echo "you like " . $fruits;
  }
  else{
    echo "Make a selection ";
  }

}

?>