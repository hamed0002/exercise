<?php

function sumEqualzero($arr){
    $newArray = [];
    for($i = 0 ; $i < count($arr); $i++){
        for($j = $i + 1; $j < count($arr);$j++){
        for($k = $j + 1; $k < count($arr);$k++){
            $sum = $arr[$i] + $arr[$j] + $arr[$k];
            if($sum == 0 ){
                array_push($newArray,[$arr[$i],$arr[$j],$arr[$k]]);
            }
           
        }}
    }
  print_r($newArray) . "<br>";
};
//sumEqualzero([1,-1,2,-3,3,4,-5,0]);

function sumEqualInput($arr,$input){
    $newArray = [];
    for($i = 0 ; $i < count($arr); $i++){
        for($j = $i + 1; $j < count($arr);$j++){
        for($k = $j + 1; $k < count($arr);$k++){
            $sum = $arr[$i] + $arr[$j] + $arr[$k];
            if($sum == $input ){
                array_push($newArray,[$arr[$i],$arr[$j],$arr[$k]]);
            }
           
        }}
    }
  print_r( $newArray) . "<br>";
};
//sumEqualInput([1,-1,2,-3,3,4,-5,0],2);

function listed($list1,$list2){
    $newArray = array_merge($list1,$list2);
    sort($newArray);
    //$newArray = sort($newArray);
    foreach($newArray as $x){
        echo $x;
    }
} 
listed([1,2,3,4],[5,6,7,8])


?>