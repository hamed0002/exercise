<?php
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
   longeststr("@@@@@bcf#.acvfr");
   
?>