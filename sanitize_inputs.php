<?php

if(isset($_POST['submit'])){
$name=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);    
$age= filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
echo $name. '-' .$age;

}
?>


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div>
    <label for="name">NAME:</label>
    <input type="text" name="name">
</div>
<div>
    <label for="age">AGE:</label>
    <input type="text" name="age">
</div>
<input type="submit" value="Submit"  name="submit">

</form>