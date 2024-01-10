<?php
$name = $_POST["nm"];
$email = $_POST["em"];
$contact = $_POST["ct"];
$number = $_POST["nr"];
$destination = $_POST["dn"];
$date = $_POST["dt"];

$serv= "localhost:3306";
$usr= "root";
$pwd= "";
$dtb= "travel";

$con= new mysqli($serv,$usr,$pwd,$dtb);

$ins= mysqli_query($con, "insert into book values('$name', '$email', '$contact', '$number', '$destination', '$date')");
echo "Booking Done Successfully!";

?>