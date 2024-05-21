<?php
  
//   $NUMBERS =[1,2,3,8,999];
//   print_r($NUMBERS) ;
// echo $NUMBERS[3]; 
// print_r($NUMBERS);

// $colors =[
//     1=> 'ali',
//     2=>'mohsin',
//     3=> 'Ahmed'
// ];
// echo $colors[3];

$people=[[
'firstname'=>'mohsin',
'lastname' =>'ali',
'age'=>25,
],
[
    'firstname'=>'mohsin',
    'lastname' =>'Raza',
    'age'=>22,
    
],
[
    'firstname'=>'muzamil',
    'lastname' =>'Haroon',
    'age'=>21,
]
];
// echo  $people[2]['age'];
var_dump(json_encode($people));
?>