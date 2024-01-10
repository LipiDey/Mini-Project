<?php
$email = $_POST["em"];
$password = $_POST["pd"];


$serv= "localhost:3306";
$usr= "root";
$pwd= "";
$dtb= "travel";

$con= new mysqli($serv,$usr,$pwd,$dtb);

$ins= mysqli_query($con, "insert into log values('$email', '$password')");
echo "Signup Successfully";

?>