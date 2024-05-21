<?php

if(isset($_POST['submit'])){
    $allowed_ext=array('png','jpeg','pdf','JPG','gif');
    if(!empty($_FILES['upload']['name'])){
        $filename=$_FILES['upload']['name'];
        $file_size=$_FILES['upload']['size'];
        $file_tmp=$_FILES['upload']['tmp_name'];
        $target_dir="C:/xampp/htdocs/php-practice/images/${filename}";

        //Get file
        $file_ext=explode('.',$filename);
        $file_ext=strtolower(end($file_ext));

        //validate file
        if(in_array($file_ext, $allowed_ext)){
            // validation of filesize
            if($file_size <=1000000){
                move_uploaded_file($file_tmp,$target_dir);
                $message = '<p style="color:green;">File uploaded !</p>';
            }
            else{
                $message = '<p style="color:red;">This file is large!</p>';
            }
        }
        else{
            $message = '<p style="color:red;">This extension is not allowed!</p>';
        }
    }
    else{
        $message='<p style="color:red;">PLEASE CHOOSE A FILE</p>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file Upload</title>
</head>
<?php echo $message ?? null;?>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
SELECT IMAGE TO UPLOAD:
<input type="file" name="upload">
<input type="submit" value="submit" name="submit">

</form>
</body>
</html>