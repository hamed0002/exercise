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
        foreach($result as $y){
            echo "<br>";
            foreach ($y as $z){
                echo $z;
            }
        } ;
    }



function calcSubset($A, &$res, &$subset, $index) {
    $res[] = $subset;
    for ($i = $index; $i < count($A); $i++) {
        $subset[] = $A[$i];
        calcSubset($A, $res, $subset, $i + 1);
        array_pop($subset);
    }
}

function subsets($A) {
    $subset = [];
    $res = [];
    $index = 0;
    calcSubset($A, $res, $subset, $index);
    foreach ($res as $subset) {
        returnAllComb($subset) . "<br>";
    }
}

//subsets([1,2,3]);

subsets([1,2])
?>



