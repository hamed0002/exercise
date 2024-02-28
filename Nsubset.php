<?php 

function calcSubset($A, &$res, &$subset, $index) {
    $res[] = $subset;
    for ($i = $index; $i < count($A); $i++) {
        $subset[] = $A[$i];
        calcSubset($A, $res, $subset, $i + 1);
        array_pop($subset);
    }
}
function subsets($A,$N) {
    $subset = [];
    $res = [];
    $index = 0;
    $Nsubset = [];
    $current = 0;
    $finalResult = [3];
    calcSubset($A, $res, $subset, $index);
    foreach ($res as $subset) {
        if(count($subset) == $N){
            $Nsubset[] = $subset;
        }        
        };
        foreach($Nsubset as $x){
            $current = 0;
            echo "<br>";
            for($i = 0;$i < count($x);$i++){
               //echo $x[$i]."<br>"; 
               $current = (int)$current + (int)($x[$i]);
               //echo $current . "<br>";
            };
            if($current == 0){
                print_r($x);
            }
            
        }
        print_r($finalResult);
    }

     
 
subsets([1,2,-3,5,6,9,-7,8],3)
?>