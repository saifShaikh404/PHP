<?php 
// cookie = Information about a user stored in a user's web-browser targeted advertisements, browsing     preferences, and other non-sensitive data

//syntax:
// setcookie("key","value",time() + 1,filepath)

setcookie("food","pizza",time() + 1000,"/");
setcookie("drink","redBull",time() + (86400*2),"/");
setcookie("snacks","biscuits",time() + 1000,"/");

// foreach($_COOKIE as $key => $val){
//     echo "$key and $val <br>";
// }

// if(isset($_COOKIE['food'])){
//     echo $_COOKIE['food'];
// }

// override the previous cookie
setcookie("food","hamburger",time() + 5,"/")

?>