<?php
/*
function linear_search($arr,$target){
    // return the postion of the target if found else return none
    $count = count($arr);
    for ($i = 0; $i < $count;$i++){
        if($target == $arr[$i]){
            echo $i . "<br>";
        }
    
    }
}
linear_search([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15],8);

function binary_search ($arr,$target){
    $first = 0;
    $last = count($arr) -1 ;
    while ($first <= $last){
        $midPoint = floor(($first + $last)/2);
        if($arr[$midPoint] == $target){
            return $midPoint;
        }else if($arr[$midPoint] < $target){
            $first = $midPoint + 1;
        }else{
            $last = $midPoint -1;
        }
    }
    return "none";
}
echo binary_search([1,2,3,4,5,6,7,8,9,10],7);

function recursive_binary_search($arr,$target){
    if(count($arr) == 0){
        return false;
    }else{
        $midPoint = floor(count($arr)/2);
    }
    if($arr[$midPoint] == $target){
        return true;
    }else if($arr[$midPoint] < $target){
           return recursive_binary_search(array_slice($arr,$midPoint +1),$target);
        }else {
            return recursive_binary_search(array_slice($arr,0,$midPoint -1),$target);
        }
}
echo "<br>" . recursive_binary_search([1,2,3,4,5,6,7,8,9,10],-1);



$new_list = [1,2,3];
$result = $new_list[0];
$new_list = array_merge($new_list,[6,7,8]);
array_unshift($new_list,0);
foreach($new_list as $x){
    echo $x . "<br>";
};
*/
 $que = new SplQueue();
?>