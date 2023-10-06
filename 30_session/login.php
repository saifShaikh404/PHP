<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="uname">Username:</label><br>
        <input type="text" name="uname" id="uname"><br>
        <label for="pass">Password:</label><br>
        <input type="password" name="pass" id="pass"><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php 

if(!empty($_SESSION['uname']) && !empty($_SESSION['pass'])){
    header('Location: Home.php');
}

if(isset($_POST['login'])){

    if(!empty($_POST['uname'])){
        $_SESSION['uname'] = $_POST['uname'];
        echo $_SESSION['uname'];
    }
    else{
        echo "Username is Empty";
    }

    if(!empty($_POST['pass'])){
        $_SESSION['pass'] = $_POST['pass'];
        echo $_SESSION['pass'];
    }
    else{
        echo "Password is Empty";
    }

    if(isset($_SESSION['uname'])){
        if(isset($_SESSION['pass'])){
            header("Location: Home.php");
        }
    }
}

?>