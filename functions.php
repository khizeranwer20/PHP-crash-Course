<?php
// function user(){
//     echo "User Registered";
// }
// user();

function addition($number_1 =15, $number_2=20 ){
    return $number_1 + $number_2;
}

$result = addition();
echo "The result of the addition is ".$result;


"<br>";
function subtract($number_1 =15, $number_2=20 ){
    return $number_1 - $number_2;
}

$result = subtract();
echo "The result of the subtraction is ".$result;

"<br>";
function multiply($number_1 =15, $number_2=20 ){
    return $number_1 * $number_2;
}

$result = multiply();
echo "The result of the multiplication is ".$result;

 "<br>";
function mode($number_1 =15, $number_2=20 ){
    return $number_1 % $number_2;
}

$result = mode();
echo "The result of the mode is ".$result;


?>