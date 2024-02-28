<?php
//Bogo sort
function isSorted($arr){
    for ($i = 0;$i < count($arr);$i++){
        if($arr[$i+1] != null){
        if($arr[$i] > $arr[$i+1]){
        return false;
    }
  }
}
    return true;
}

function bogoSort($arr){
    $attempt = 0;
    while (isSorted($arr) == false){
        shuffle($arr);
        $attempt++;
    }
    echo $attempt . "<br>";
    return $arr;
};
//print_r(bogoSort([2,4,6,1,8]))

//selection sort
function selectionSort($arr){
    $sorted = [];
    $arrLen = count($arr);
    $smallest = 999999999999;
    $index = 0;
    $attempt = 0;
    while(count($sorted) !== $arrLen){
    for($i = 0;$i < count($arr);$i++){
        if($arr[$i] <= $smallest){
            $smallest = $arr[$i];
            $index = $i;
            //echo $index;
        }
    }
    array_splice($arr,$index,1);
    $sorted[] = $smallest;
    $smallest = 9999999999999;
    $index = 0;
    $attempt++;
  }
  echo $attempt . "<br>";
  return $sorted;
}
//print_r(selectionSort([1,5,6,9,11,3,12,15,22,8,19,85,69,155,666,13,99,121,75,232,9,10]))

// Quick sort 

function quickSort($arr){
    if(count($arr) <= 1){
        return $arr;
    }
    $lessThanPivot = [];
    $graterThanPivot = [];
    $pivot = $arr[0];
    for($i = 1; $i < count($arr);$i++){
        if ($arr[$i] <= $pivot){
            $lessThanPivot[] = $arr[$i];
        }else {
            $graterThanPivot[] = $arr[$i];
        }
    }
    return array_merge(quickSort($lessThanPivot),[$pivot],quickSort($graterThanPivot));

}
print_r(quickSort([4,2,1,5,6,67]));


?>