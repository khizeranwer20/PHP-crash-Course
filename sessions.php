<?php

session_start();
if(isset($_POST['submit'])){

    $username=filter_input(INPUT_POST ,'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    if($username == 'khizer' && $password='1122'){
        $_SESSION['username']= $username;
        header('location:/PHP-PRACTICE/sessions.php');
    }else
    {
        echo 'incorrect login';
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<div>
    <label for="username">USERNAME</label>
    <input type="text" name="username">
</div>

<div>
    <label for="password">PASSWORD</label>
    <input type="text" name="password">
</div>
<input type="submit" value="submit" name="submit">

</form>