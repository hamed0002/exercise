<?php
/*
   function longeststr($str) {
    $currentstr = "";
    $biggeststr = "";
    $strlen = 0;

    for($i = 0; $i < strlen($str);$i++){
        $currentstr = $str[$i];
        
        for($j = $i + 1; $j < strlen($str);$j++){
            if(str_contains($currentstr,$str[$j])){
                if($strlen < strlen($currentstr)){
                    $strlen = strlen($currentstr);
                    $biggeststr = $currentstr. "<br>";
                    $currentstr = "";
                    break;
                }else{
                    $currentstr = "";
                    break;
                }
            }else{
                $currentstr .= $str[$j];
                //echo $currentstr . "<br>";
                if(strlen($currentstr) > $strlen){
                    $biggeststr = $currentstr;
                }else if($strlen == strlen($currentstr)){
                    $biggeststr .= $currentstr . "<br>";
                }
            }
        }
    }
    
    echo $biggeststr;
   }
   longeststr("abccerttyuiiopl.")
   */
?>

<?php

function longeststr($str) {
    $currentstr = "";
    $biggeststr = [];
    $maxLen = 0;
    for($i = 0; $i < strlen($str);$i++){
        $currentstr = $str[$i];   
        for($j = $i + 1; $j < strlen($str);$j++){
            if(!str_contains($currentstr,$str[$j])){
                $currentstr .= $str[$j];
                //echo "<br>" . $currentstr . "<br>";
                if(strlen($currentstr) > $maxLen){
                    $biggeststr = [$currentstr];
                    $maxLen = strlen($currentstr);
                }else if(strlen($currentstr) ==  $maxLen){
                    if(in_array($currentstr,$biggeststr)){
                        //continue;
                    }else{
                        array_push($biggeststr,$currentstr);
                    }
                }
            }else if(str_contains($currentstr,$str[$j])){
                $currentstr = "";
            }
        }
    }
    if ($maxLen > strlen($currentstr)){
    foreach($biggeststr as $x){
        echo $x . "<br>";
    }}else{
    echo $currentstr;
   }}
   longeststr("abccdeefgghiijkkmnnop");
 "abccdeerttyu"
 
?>