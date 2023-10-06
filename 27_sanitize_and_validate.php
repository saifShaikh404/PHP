<!-- There is more sanitize and filter methods search in docs  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/saif/27_sanitize_and_validate.php" method="post">
        <label for="uname">Username:</label><br>
        <input type="text" name="uname" id="uname"><br>
        <label for="age">Age:</label><br>
        <input type="text" name="age" id="age"><br>
        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email"><br>
        <input type="submit" name="submit" value="submit"><br>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $uname = filter_input(INPUT_POST,"uname",FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
    $email1 = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
    $age1 = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);

    if(empty($age1)){
        echo "Something's wrong";
    }
    else{
        // echo "Uname is $uname";
        // echo "Age is $age";
        // echo "EMAIL is $email";
        // echo "EMAIL is $email1";
        echo "age is $age1";
    }
}

?>