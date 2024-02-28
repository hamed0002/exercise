<?php
    function mergeSort($numbers){
        if(count($numbers) <= 1){
            return $numbers;
        }
        $mid = floor(count($numbers) /2);
        $left = array_slice($numbers,0,$mid);
        $right = array_slice($numbers,$mid);
        $left = mergeSort($left);
        $right = mergeSort($right);
        return merge($left,$right); 
    }

    function merge($left,$right){
        $i = 0;
        $j = 0;
        $l = [];
        while($i < count($left) && $j < count($right)){
            if($left[$i] <= $right[$j]){
                $l[] = $left[$i];
                $i++;
            }else {
                $l[] = $right[$j];
                $j++;
            }
        }
        while($i < count($left)){
            $l[] = $left[$i];
            $i++;
        }
        while($j < count($right)){
            $l[] = $right[$j];
            $j++; 
        }
        return $l;
    }
    print_r(mergeSort([2,41,8,98,11,22,99,12,2,4,6,7,8,0]));
    echo "<br>";

    function quickSort($arr){   
        if(count($arr) <= 1){
            return $arr;
        }
        $pivot = $arr[0];
        $left = [];
        $right = [];
        for($i = 1;$i < count($arr);$i++){
            if($arr[$i] <= $pivot){
                $left[] = $arr[$i];
            }else{
                $right[] = $arr[$i];
            }
        }
        $left = quickSort($left);
        $right = quickSort($right);
        return array_merge($left,[$pivot],$right);
        
    }
    print_r(quickSort([3,1,4,2,7,10,22,19,11,5,6]));
    echo "<br>";

    class Node{
        public $data;
        public $next;
        function __construct($data){
            $this->data = $data;
            $this->next = null;
        }
    }

    class LinkedList {
        private $head;
        function __construct(){
            $this->head = null;
        }

        function add($data){
            
            if($this->head == null){
                $this->head = new Node($data);
            }else {
                $current = $this->head;
                while($current->next !== null){
                    $current = $current->next;
                }
                $current->next = new Node($data);
            }
        }

        function display(){
            $current = $this->head;
            while ($current !== null){
                echo $current->data . "    ";
                $current = $current->next;
            }
        }
    }
    
        $linkedList3 = new LinkedList;
        $linkedList3->add(2);
        $linkedList3->add(4);
        $linkedList3->add(5);
        $linkedList3->add(8);
        $linkedList3->display();
        ?>s