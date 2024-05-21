<?php
session_start();
if($_SESSION['username'])
{
    echo '<h1>Welcome' .$_SESSION['username'] .'</h1>';
}
else{
    echo '<h1>WELCOME GUEST</h1>';
    echo '<a href="/php-practice/sessions.php">HOME</a>';
}
