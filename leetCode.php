<?php
function findMedian($nums1,$nums2){
    $median = 0; 
  $newArr =  array_merge($nums1,$nums2);
  $arrlen = count($newArr);
   sort($newArr);
  if($arrlen % 2 == 0){
    $half = $arrlen/2;
    $median = ($newArr[$half-1] + $newArr[$half] ) /2;
   }else{
    $half = ($arrlen + 1)/2;
    //echo $half;
    $median = $newArr[$half -1];
   }
   echo $median;
}
findMedian([1,3],[2]);
?>