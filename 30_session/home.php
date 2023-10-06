<!-- session = Super Global Variable used to store ind=formation on a user to be used across multiple pages. A user is assigned a session-id
eg. login credentials -->

<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home Page</h1>
    <form action="Home.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>

<?php

if(empty($_SESSION['uname']) && empty($_SESSION['pass'])){
    header('Location: login.php');
}

if(isset($_POST['logout'])){
    // destroy all session variables
    session_destroy();
    
    header('Location: login.php');
}

?>