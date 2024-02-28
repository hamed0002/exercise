<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculator.php" method="post">
        first number:<br>
        <input type="number" name="num1"><br>
        OP:<br>
        <input type="text" name="op"><br>
        secend number:<br>
        <input type="number" name="num2"><br>
        <input type="submit">
    </form>
    <?php
    $result;
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["op"];
    
    if($operator == "+"){
        
        echo $num1 + $num2;
    }else if($operator == "-"){
        echo $num1 - $num2;
    }else if($operator == "*"){
        echo $num1 * $num2;
    }else if($operator == "/"){
        echo $num1 / $num2;
    }else{
        echo "invalid input <br>";
    }
    
    function longeststr($str) {
        $currentstr = "";
        $biggeststr = "";
        $strlen = 0;
    
        for($i = 0; $i < strlen($str);$i++){
            $currentstr = $str[$i];   
            for($j = $i + 1; $j < strlen($str);$j++){
            if(!str_contains($currentstr,$str[$j])){
                $currentstr .= $str[$j];
                 //$currentstr . "<br>";
                if($strlen < strlen($currentstr)){
                    $strlen = strlen($currentstr);
                    $biggeststr = $currentstr;
                }else if($strlen == strlen($currentstr)){
                    if( str_contains($biggeststr,$currentstr)){
                        continue;
                    }else{
                    $biggeststr .=  "<br>" .$currentstr;// . "<br>";
                } 
                }
            }else if(str_contains($currentstr,$str[$j])){
                $currentstr = "";
                //break;
            }
        }
    }
    
    echo $biggeststr ;
}
       longeststr("abccdeefgghiijkkmnnop");
    ?>
</body>
</html>