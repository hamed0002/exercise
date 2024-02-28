<?php
function longestpal($str) {
    $currentstr = "";
    $biggeststr = [];
    $maxLen = 0;
    for($i = 0; $i < strlen($str);$i++){
        $currentstr = $str[$i];   
        for($j = $i + 1; $j < strlen($str);$j++){
            $currentstr .= $str[$j];
            if($currentstr == strrev($currentstr) 
            && strlen($currentstr) > $maxLen){
                $biggeststr = [$currentstr];
                $maxLen = strlen($currentstr);
            }else if($currentstr == strrev($currentstr) 
            && strlen($currentstr) == $maxLen){
                array_push($biggeststr,$currentstr);
            }
        }
    }
    foreach($biggeststr as $x){
        echo $x . "<br>";
    }
};

longestpal("abcdefg")
?>