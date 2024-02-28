<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todoList</title>
    </head>
        <body>
            <form action="todoList.php" method="post">
            <label>To do</label> <br>
            <input type="text" name="title"> <br>
            <label>Description</label> <br>
            <textarea name="Description" rows="4"></textarea> <br>
            <input type="submit" name="submit">
            </form>
        </body>
    </html>

<?php
$task = [];
$title =  $_POST["title"]; 
$description  = $_POST["Description"];
$submit = $_POST["submit"];
if(isset($submit)){
    if(empty($title)){
        echo "<script>alert('Title is empty')</script>";  
    }else if(empty($description)){
        echo "<script>alert('Description is empty')</script>";
    }else{
        addTotask($description);
    }
    
}
foreach ($task as $x){
    echo $x . "<br>"; 
}
print_r($task);

function addTotask($value){
    global $task;
    $task[] = $value;
}
?>