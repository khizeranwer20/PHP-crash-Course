<?php

setcookie('name', 'khizer',time() +86400);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];

}
?>