<?php






echo $_GET['name'];
echo $_GET['age'];
?>


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
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