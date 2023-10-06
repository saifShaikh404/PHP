<?php

$pass = "abc123";

$hash = password_hash($pass, PASSWORD_DEFAULT);

echo $hash;

if(password_verify("abc123", $hash)){
    echo "Correct password";
}
else{
    echo "Incorrect password";
}

?>