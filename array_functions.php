
<?php

// $cars =["civic","carolla","cultus","mehran","crown","sportage"];
// echo count($cars);


// array_push($cars , 'mehran');
// array_unshift($cars , 'Crown');
// array_push($cars, 'Sportage');
// array_shift($cars);
// array_pop($cars);
// unset($cars[3]);
// $arraychunked =array_chunk($cars,2);
//  print_r($arraychunked);

// $arr1=[1,2,3,3,3,3];
// $arr2=[22,55,45,488,5,6];
// $arr3=array_merge($arr1,$arr2);
// $arr4=[...$arr1,...$arr2];
// print_r($arr4);

$arr1=['red','orange','yellow'];
$arr2=['green','white','black'];

// $arr4 = array_combine($arr1,$arr2);

// $key=array_keys($arr4);
// print_r($key);

// $flip =array_flip($arr4);
// print_r($flip);
$num=range(1,25);
print_r($num);
$numbers =array_map(function($num){
    return "Numbers " .$num .'<br>';
}, $num);
print_r($numbers);
?>