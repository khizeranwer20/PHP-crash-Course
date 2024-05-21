<?php

// $age =20;
// if($age <= 18){

//     echo "you are not eligible for this position";
// }
// else {
//     echo "you are eligible for the position";
// }

// $t=date("H");

// if($t <12 ){
//     echo "Good morning";
// }
// else if ($t >17 ){
//     echo "Good afternoon";

// }
// else{
//     echo "Good evening";
// }

// $post =["Firstname"];

// if(empty($post)){
//     echo $post[0];
// }
// else {
//     echo "Empty";
// }

// echo empty($post) ? $post[0] :"No post";

// $firstname = empty($post) ? $post[0] : "Null";
// echo $firstname;

$favColors='Green';

switch ($favColors){
    case 'red':
        echo 'Your favorite color is red';
        break;
        case 'green':
            echo 'Your favorite color is green';
            break;
            case 'yellow':
                echo 'Your favorite color is yellow';
                break;
                default:
                    echo 'Your favorite color is is neither red nor blue......';
                    break;
}

?>