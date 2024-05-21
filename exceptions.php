<?php

function divide($value){
    if(!$value)
    {
        throw new Exception("Division by zero !");
    }
return 1/$value;
}

try{
    echo divide(2);
    echo divide(0);
}
catch(Exception $error)
{
    echo 'caught exception' ,$error->getmessage(), '';
} 
finally{
    echo "FINALLY DONE";
}

echo "Hello World";
?>