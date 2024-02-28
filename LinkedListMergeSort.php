<?php
class Node {
    public $data;
    public $next;

    public function __construct($data = null) {
        $this->data = $data;
        $this->next = null;
    }
}
function mergeSort($head) {
    
    if ($head === null || $head->next === null) {
        return $head;
    }
    
    $middle = getMiddle($head);
    $nextOfMiddle = $middle->next;
    $middle->next = null;

 
    $left = mergeSort($head);
    $right = mergeSort($nextOfMiddle);
    $sortedList = merge($left, $right);

    return $sortedList;
}
function getMiddle($head) {
    if ($head === null) {
        return null;
    }
    
    $slowPtr = $head;
    $fastPtr = $head->next;
    
    while ($fastPtr !== null) {
        $fastPtr = $fastPtr->next;
        
        if ($fastPtr !== null) {
            $slowPtr = $slowPtr->next;
            $fastPtr = $fastPtr->next;
        }
    }
    
    return $slowPtr;
}
function merge($left, $right) {
    if ($left === null) {
        return $right;
    }
    
    if ($right === null) {
        return $left;
    }
    
    $result = null;
    
    if ($left->data <= $right->data) {
        $result = $left;
        $result->next = merge($left->next, $right);
    } else {
        $result = $right;
        $result->next = merge($left, $right->next);
    }
    
    return $result;
}

$list = new Node(5);
$list->next = new Node(2);
$list->next->next = new Node(8);
$list->next->next->next = new Node(1);
$list->next->next->next->next = new Node(4);

echo "Original List: ";
printList($list);


$sortedList = mergeSort($list);

echo "Sorted List: ";
printList($sortedList);


function printList($head) {
    $current = $head;
    
    while ($current !== null) {
        echo $current->data . " ";
        $current = $current->next;
    }
}

?>