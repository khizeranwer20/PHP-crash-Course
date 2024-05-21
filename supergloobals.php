<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?php echo $_SERVER['HTTP_HOST']; ?></li>
        <li><?php echo $_SERVER['SERVER_NAME'] ; ?></li>
        <li><?php echo $_SERVER['SERVER_PORT'] ;?></li>
        <li><?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
        <li><?php echo $_SERVER['PHP_SELF']; ?></li>
        <li><?php echo $_SERVER['REQUEST_URI']; ?></li>
        <!-- <li><?php echo $_SERVER['HTTP_POST'] ;?></li>
        <li><?php echo $_SERVER['HTTP_POST']; ?></li> -->
    </ul>
    
</body>
</html>