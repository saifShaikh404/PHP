<?php

// isset = returns TRUE if the variable is declared and not null
// empty = returns TRUE if the variable is NOT declared, false, null and "".
// if we declare variable but not set any value it considered as null

// isset
    // $var1;
    // $var1 = "";
    // $var1 = false;
    // $var1 = true;
    // $var1 = null;
    // $var1 = "Hello";
    // $var1 = 95;

    // if(isset($var1)){
    //     echo "True";
    // }
    // else{
    //     echo "False";
    // }

// empty
    // $var2;
    // $var1 = "";
    // $var1 = false;
    // $var1 = null;
    // $var1 = true;
    // $var1 = "Hello";
    // $var1 = 52;

    // if(empty($var2)){
    //     echo "True";
    // }
    // else{
    //     echo "False";
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
    <form action="/saif/24_isset_and_empty.php" method="post">
        <label for="uname">Username:</label><br>
        <input type="text" name="uname" id="uname"><br>
        <label for="pass">Password:</label><br>
        <input type="password" name="pass" id="pass"><br>
        <input type="submit" name="login" value="Login"><br>
    </form>

    <?php
    
    // foreach($_POST as $key => $value){
    //     echo "$key = $value <br>";
    // }

    if(isset($_POST["login"])){
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];

        if(empty($uname)){
            echo "Username is empty";
        }
        else if(empty($pass)){
            echo "Password is Empty";
        }
        else{
            echo "Login Successfully";
        }
    }
    
    ?>
</body>
</html>