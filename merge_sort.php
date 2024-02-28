<?php
function merge($left,$right){
    $l = [];
    $i = 0;
    $j = 0;

while ($i < count($left) && $j < count($right)){
    if($left[$i] < $right[$j]){
        $l[] = $left[$i];
        $i++;
    }else{
        $l[] = $right[$j];
        $j++;
    }
}
    while($i < count($left)){
        $l[] = $left[$i];
        $i++;
    }
    while($j < count($right)){
        $l[] = $right[$j];
        $j++;
    }
    return $l;
}


function merge_sort($array){
    if(count($array) <= 1){
        return $array;
    }
    $mid = floor((count($array)) /2);
    $left = array_slice($array,0,$mid);
    $right = array_slice($array,$mid);
    $left = merge_sort($left);
    $right = merge_sort($right);

    return merge($left,$right);
}



$arr = merge_sort([10,5,92,99,22,2,3,7,7,3242,131,537,124,31,11,29]);
foreach($arr as $x){
    echo $x . "<br>";
}
?>