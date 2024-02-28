<?php
function generateSubsets($nums) {
    $n = count($nums);
    $result = [[]]; 
    
    for ($i = 0; $i < $n; $i++) {
        $currSize = count($result);
        
        for ($j = 0; $j < $currSize; $j++) {
            $temp = $result[$j];
            $temp[] = $nums[$i];
            $result[] = $temp;
        }
    }

  foreach($result as $x){
    echo "<br>";
    foreach($x as $y){
        echo $y ;
    }
  }
}


generateSubsets([1,2,3,4])
?>
