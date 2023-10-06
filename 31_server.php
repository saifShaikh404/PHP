<!-- $_SERVER = Super Global Variable that contains headers, paths, and script ocations. The entries in this array are created by the web server. Shows nearly you need to know about the current web page env.

$_SERVER['REQUEST_METHOD'] = show the method of the server

$_SERVER['PHP_SELF'] = show the current page url

There is more... use this foreach loop to see all this


-->
<!-- <?php 
foreach($_SERVER as $key => $val){
    echo "$key = $val <br>"; 
}
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    Uname: <br>
    <input type="text" name="uname">
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "Hello";
}

?>