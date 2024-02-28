<?php
include("database.php");

$sql = "SELECT * FROM _user ";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
    echo $row["user_id"] . "<br>";
    echo $row["user_name"] . "<br>";
    echo $row["user_passwords"] . "<br>";
    echo $row["registar_date"] . "<br>";}
}
mysqli_close($con);
?>
