<?php
$file ='extras/user.txt';

if(file_exists($file))
{
    $handle =fopen($file , 'read');
    $content= fread($handle, filesize($file));
    fclose($handle);
    echo $content;
}else
{
    $handle = fopen($file,'w');
    $content ='brad' .PHP_EOL .'ali';
    fwrite($handle, $content);
    fclose($handle);
}