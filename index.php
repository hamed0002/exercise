<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    <form action="index.php" method="post">
    <label>username</label>
    <input type="text" name="username"><br>
    <label>password</label>
    <input type="password" name="password"><br>
    <input type="submit" value="Log in"><br>
    </form>

    <form action="index.php" method="post">
        <label>quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
-->    
<!--<form action="index.php"method="post">                                        
    <label>x</label>
    <input type="text" name="x">
    <label>y</label>
    <input type="text" name="y">
    <label>z</label>
    <input type="text" name="z">
    <input type="submit" value="total"> 
</form>
-->    
<!--<form action="index.php" method="post">
    <label>radius</label>
    <input type="text" name="radius">
    <input type="submit" value="calculate">
</form><br>
-->

<!--<form action="index.php" method="post">
    <input type="submit" name="stop" value="stop">
</form>
</body>
</html> -->

<!--<form action="index.php" method="post">
    <label>Enter a country</label>
    <input type="text" name="country">
    <input type="submit" value="submit">
</form>!-->

<!--<form action="index.php" method="post">
    <label>username</label><br>
    <input type="text" name="username"><br>
    <label>password</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Login" name="login">
</form>!-->
<!--<form action="index.php" method="post">
<input name="credit_card" type="radio" value="Visa">Visa<br>
    <input name="credit_card" type="radio" value="Mastercard">Mastercard<br>
    <input name="credit_card" type="radio" value="American Express">American Express<br>
    <input type="submit" name="confirm" value="Confirm">
</form>!-->
<!--
<form action="index.php" method="post">
    <input type="checkbox" name="pizza" value="PIZZA">Pizza<br>
    <input type="checkbox" name="ham" value="HAM">Ham<br>
    <input type="checkbox" name="hotdog" value="HOT DOG">Hot dog<br>
    <input type="checkbox" name="taco" value="TACO">Taco<br>
    <input type="submit" name="submit">
</form>!-->
<!--
<form action="index.php" method="post">username<br>
<input type="text" name="username"><br>age:<br>
<input type="text" name="age"><br>email:<br>
<input type="text" name="email">
<input type="submit" name="login" value="login">
</form>
This is the homepage!-->

<form action="index.php" method="post">
    <label>password:</label>
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>
<!--
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    usernaem:<br>
    <input type="text" name="username"><br>
    <input type="submit" >
</form>!-->
<?php 
/*
 $name = "hamed";
 $email = "fake@gmail.com";
 $age = 18;
 $users = 25;
 $food = "pizza";
 $gpa = 2.5;
 $counter = 10;
 $counter --;


 $item = "pizza";
 $price = 5.99;
 $quantity = $_POST["quantity"];
 $total = null;
 $total = $quantity * $price ;

echo $_POST["username"] . "<br>";
echo $_POST["password"] . "<br>"; 
 echo "hello {$name}<br>";
 echo "you like {$food} <br>";
 echo "your email is {$email}<br>";
 echo "i'am $age years old<br>";
 echo "there are $users users online.<br>";
 echo "your grade is $gpa<br>";
 echo $counter . "<br>"; 
 

    echo "you have ordered $quantity x {$item}s <br>";
    echo "your total is \${$total}";
    */
    //$x =  $_POST["x"];
    //$y = $_POST["y"];
    //$z = $_POST["z"];
    //$total = null;
    //$total = round($x);
    //$total = floor($x);
    //$total = ceil($x);
    //$total = sqrt($x);
    //$total = pow($x,$y);
    //$total = min($x,$y,$z);
    //$total = PI()
    //$total = abs($x);
    //$total = rand();
    //echo "$total"

   /* $radius = $_POST["radius"];
    $circum = null;
    $circum = 2 * pi() * $radius;
    $circum = round ($circum,2);
    $area = null;
    $area = pi() * pow($radius,2);
    $area = round($area,2);
    echo "circumference = {$circum}cm <br>";
    echo "area = {$circum}cm^2 <br>"
    */

   /* $hours = 72;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0){
        $weekly_pay = 0;
    }
    else if($hours <= 50){
     $weekly_pay = $hours * $rate;
    }else{
        $weekly_pay = ($rate * 40) + ($hours -40) * ($rate * 1.5);
    }
    echo "You made \${$weekly_pay} this week";
    */

  /*  for ($i = 0; $i < 5; $i++){
        echo "$i<br>";
    }*/
   /* $counter = 0;
    while($counter <= 10){
        $counter ++;
        echo $counter . "<br>";
    }
    */
  /*  $secends = 0 ;
    $running  = true;
    while($running){
        if(isset($_POST["stop"])){
            $running = false;
        }else{
        $secends ++;
        echo $secends ."<br>";}
    }*/ 

    /*
    $foods = array("appel","orange","banana","coconut");
    $foods[0] = "pineappel";
    array_push($foods , "kiwi","grape");
    array_pop($foods);
    array_shift($foods);
    array_unshift($foods,"cherry");
    $foods =  array_reverse($foods);
    echo count($foods) . "<br>";
    //echo $foods[0];
    foreach($foods as $food ){
        echo $food . "<br>";
    };*/

    //associative arrays
    //assiciative array = An array made of key => value pairs
    // id => user name
    // item => price
    
   /* $capitals = array("USA" => "washington",
    "Japan" =>"tokyo",
    "Iran" => "tehran");
    $capitals["Iran"]= "ghom";
    $capitals["korea"] = "seul";
    $keys = array_keys($capitals);
    $arrayValues = array_values($capitals) ;
    //array_flip($capitals) => return a new array;
    //array_reverse($capitals) => return a new array ;

    echo $capitals["Iran"]. "<br>";
    foreach($capitals as $key => $value){
        echo "$key: $value" . "<br>";
    };
    
    foreach($keys as $x ){
        echo "$x" . "<br>";
    };
    foreach($arrayValues as $x ){
        echo "$x" . "<br>";
    };*/

   /* $capitals = array("USA" => "washington",
    "Japan" =>"tokyo",
    "Iran" => "tehran",
    "Korea" => "seoul"
);
$capital = $_POST["country"];
echo $capitals[$capital]
*/

/*$userName = "" ;
if(empty($userName)){
    echo "this variable is empty";
}else{
    echo "this variable is Not empty";
}*/


//foreach($_POST as $key => $value){
//    echo "$key = $value <br>" ;
//}
/*if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if(empty($username)){
        echo "username is empty";
    }else if(empty($password)){
        echo "password is empty";
    }
    else{
        echo "hello $username";
    }
}*/
/*if(isset($_POST["confirm"])){
    if(empty($_POST["credit_card"])){
        echo "Please select an option";
    }else{
    $credit_card = $_POST["credit_card"];
    echo $credit_card;
}
}*/
/*
$numbers = function($number1,$number2){
    if($number1 < $number2){
        for ($i = $number1; $i <= $number2;$i++){
            if($i % 2 === 0){
                echo "$i is even<br>";
            }else{
                echo "$i is odd<br>";
            }
        }
    }else{
        for ($i = $number2; $i <= $number1;$i++){
            if($i % 2 === 0){
                echo "$i is even<br>";
            }else{
                echo "$i is odd<br>";
            }
    }}
};
$numbers(1,10)*/
/*
if(isset($_POST["submit"])){
    if (isset($_POST["pizza"])){
        echo "You like pizza<br>";
    };
    if (isset($_POST["ham"])){
        echo "You like ham<br>";
    }
    if (isset($_POST["hotdog"])){
        echo "You like hotdog<br>";
    }
    if (isset($_POST["taco"])){
        echo "You like taco<br>";
    }
    if (empty($_POST["pizza"])){
        echo "You dont  like pizza<br>";
    };
    if (empty($_POST["ham"])){
        echo "You dont like ham<br>";
    }
    if (empty($_POST["hotdog"])){
        echo "You dont like hotdog<br>";
    }
    if (empty($_POST["taco"])){
        echo "You dont like taco<br>";
    }
};
functions
*/
/*
function hello($name){
 echo "hello $name <br>";
}
hello("hamed");
hello("patric")
*/
/*function hypotenuse(float $a,float $b){
    $c = sqrt($a * 2 + $b *2);
    return $c;
}
echo hypotenuse(6,5);
*/

/*
$userName = "Hamed";
$phone = "032-343-531-311";
$userName = strtolower($userName);
$userName = strtoupper($userName);
$userName = trim($userName);
$userName = str_pad($userName,20,"/");
$phone = str_replace("-","",$phone);
$userArr = explode("/",$userName);
$mohsen =array("m","o","h","s","e","n") ;
$mohsen = implode($mohsen);
//$userName = strrev($userName);
//$userName = str_shuffle($userName);
$cmpare = strcmp("hamed","hamed");
echo $userName . "<br>";
echo $phone ."<br>";
echo $cmpare ."<br>";
echo strlen($userName) ."<br>";
echo strpos($phone,3) ."<br>";
echo substr($userName,0,2) ."<br>";
echo $mohsen;*/

//sanitizr user input

/*if(isset($_POST["login"])){
    $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL) ;
    echo "hello $username you are $age years old and your email is:$email";

};*/
// validate user input
/*
if(isset($_POST["login"])){
    $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL) ;
    echo "hello $username you are $age years old and your email is:$email";

}*/
//include("header.html"
/*setcookie("fave_food","pizza",time() + 86400,"/");
setcookie("fave_deink","cofee",time() + (86400 * 3) ,"/");
setcookie("fave_desert","ice crem",time() + (86400 * 4),"/");
foreach($_COOKIE as $key => $value){
    echo "$key = $value <br>" ;
};
if(isset($_COOKIE["fave_food"])){
    echo "Buy some {$_COOKIE["fave_food"]}";
}else{
    echo "i dont know your favarite food";
}
*/
// define variables and set to empty values
/*
$password = $_POST["password"] ;
echo $password;
$lenCheck = strlen($password) >= 8;
$startCheck = !is_numeric($password[0]) && $password[0] !=  "_";
$finishCheck = !is_numeric($password[strlen($password)-1]) && $password[strlen($password)-1] != "_";
$passwordRegex = '/^[a-zA-Z0-9]+$/';
$isNumberOrLetters = preg_match($passwordRegex, $password);  
if ($lenCheck && $startCheck && $finishCheck && $isNumberOrLetters){
    echo "<br> Valid password <br>";
    echo $password;
}else{
    echo "<br>invalid pass<br>";
}; */
    //session_start();
?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
<label>username:</label><br>
<input type="text" name="username"><br>
<label>password:</label><br>
<input type="password" name="password"><br>
<input type="submit" name="login" value="login"><br>
</form>
</body>
</html> !-->
<?php 
  /*  if(isset($_POST["login"])){
       
        if(!empty($_POST["username"]) &&
         !empty($_POST["password"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            header("Location: home.php");
        }else{
            echo "missing username/password";
        }
    }*/
   //foreach($_SERVER as $key => $value){
    //echo "$key: $value<br>" ;
   //}
   /*if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "hello";
   }*/
   /*$password = "hamed002";
   $hash = password_hash($password, PASSWORD_DEFAULT);
   //echo $hash;
   if(password_verify("hamed02", $hash)){
    echo "you are logged in";
   }else{
    echo "incorrent password";
   }*/
 
 /*  function ArmstrongNumber($n){
    $number = (string) $n; 
    $result = 0;
    for($i = 0; $i < strlen($number); $i++ ){
        $newNumber = $number[$i]**(strlen($number));
        $result += (int)$newNumber;
    }
    if($result == $n){
        echo "$n is a Armstrong";
    }else{
        echo "$n is not an Armstrong <br>";
        
        
    }
   };
   ArmstrongNumber(406)*/

  /* function checkTheEnd($str1,$str2){
    $strlen = strlen($str2);
    $substr = substr($str1,-$strlen);
    if($substr == $str2){
        echo "correct";
    }else{
        echo "incorrect <br>";
    }
   }
   checkTheEnd("hamed","med") */
   /*
   function longeststr($str) {
    $currentstr = "";
    $biggeststr = [];
    $maxLen = 0;
    for($i = 0; $i < strlen($str);$i++){
        $currentstr = $str[$i];   
        for($j = $i + 1; $j < strlen($str);$j++){
            if(!str_contains($currentstr,$str[$j])){
                $currentstr .= $str[$j];
                if(strlen($currentstr) > $maxLen){
                    $biggeststr = [$currentstr];
                    $maxLen = strlen($currentstr);
                }else if(strlen($currentstr) ==  $maxLen){
                    if(in_array($currentstr,$biggeststr)){
                        continue;
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
   longeststr("aaa");
 "abccdeerttyu"*/
 echo $hamed;
?>