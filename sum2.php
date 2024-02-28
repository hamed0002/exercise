<?php
function combinationSum($arr, $sum) {
    $ans = array();
    $temp = array();

    $arr = array_unique($arr);
    sort($arr);

    findNumbers($ans, $arr, $sum, 0, $temp);
    return $ans;
}

function findNumbers(&$ans, $arr, $sum, $index, &$temp) {
    if ($sum == 0) {
        $ans[] = $temp;
        return $ans;
    }

    for ($i = $index; $i < count($arr); $i++) {

        if (($sum - $arr[$i]) >= 0) {
             
            if (count(array_keys($temp, $arr[$i])) < 2) {
                array_push($temp, $arr[$i]);
                findNumbers($ans, $arr, $sum - $arr[$i], $i, $temp);
                array_splice($temp, array_search($arr[$i], $temp), 1);
            }
        }
    }
}

$ans = combinationSum([1,2,3,4,6,7,8], 8);
print_r($ans);
?>