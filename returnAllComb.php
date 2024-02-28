<?php

function returnAllComb($arr){
$arr = array_unique($arr);
$result = [];
$count = count($arr);
$combs = 1;
for($i = 1; $i < $count +1 ; $i++){
    $combs *= $i;
}
    while(count($result) < $combs){
        shuffle($arr);
        $combination = $arr; 
        if(!in_array($combination,$result)){
            array_push($result,$combination);
        } 
    }
    //echo count($result) . "<br>";
    return $result ;
}
print_r(returnAllComb([1,2,3]));
?>