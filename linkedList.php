<?php 
class Node {
    public $data;
    public $next;
    
    public function __construct($data) {
      $this->data = $data;
      $this->next = null;
    }
  }
  
  class LinkedList {
    public $head;
    
    public function __construct() {
      $this->head = null;
    }
    
    public function search($value) {
      $current = $this->head;
      while($current !== null){
        if($current->data == $value){
          return true;
        }else{
          $current = $current->next;
        }
       
      }
      return false;
  }

  public function insert($data, $index) {
    $newNode = new Node($data);
  
    if ($index < 0) {
      echo "Invalid index";
      return;
    }
  
    if ($index === 0) {
      $newNode->next = $this->head;
      $this->head = $newNode;
      return;
    }
  
    $current = $this->head;
    $count = 0;
  
    while ($count < $index - 1 && $current !== null) {
      $current = $current->next;
      $count++;
    }
  
    if ($current === null) {
      echo "Invalid index";
      return;
    }
  
    $newNode->next = $current->next;
    $current->next = $newNode;
  }
  

  public function remove($value) {
    if ($this->head === null) {
      return;
    }
    
    if ($this->head->data == $value) {
      $this->head = $this->head->next;
      return;
    }
    $current = $this->head;
    while ($current->next !== null) {
      if ($current->next->data == $value) {
        $current->next = $current->next->next;
        return;
      }
      $current = $current->next;
    }
  }

    public function add($data) {
      $newNode = new Node($data);
      
      if ($this->head === null) {
        $this->head = $newNode;
      } else {
        $current = $this->head;
        
        while ($current->next !== null) {
          $current = $current->next;
        }
        
        $current->next = $newNode;
      }
    }

    public function size(){
      $count = 0;
      $current = $this->head;
      while($current !== null){
        $count++;
        $current = $current->next;
      }
      return $count;
    }

    public function nodeAtIndex($index){
      if($index == 0){
        return $this->head;
      }else {
        $current = $this->head;
        $postion = 0;
        while ($postion < $index){
          $current = $current->next;
          $postion++;
        }
        return $current;
      }
    }

    public function display() {
      $current = $this->head;
      
      while ($current !== null) {
        echo $current->data . " ";
        $current = $current->next;
      }
    }
  }
  
  
  $linkedList = new LinkedList();
  
  $linkedList->add(10);
  $linkedList->add(20);
  $linkedList->add(30);
  $linkedList->add(40);
  echo $linkedList->size() . "<br>";
  $linkedList->display();
  
  
  
?>
