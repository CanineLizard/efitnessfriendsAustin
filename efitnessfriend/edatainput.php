<?php
session_start();
$con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');

if(!$con){
	echo 'Databse Not Connected To Server';
}

$bsug = $_POST['bsug'];
$wght = $_POST['wght'];
$sbp = $_POST['sbp'];
$dbp = $_POST['dbp'];
$restHeart = $_SESSION["restHeart"];
$minHeart = $_SESSION["minHeart"];
$maxHeart = $_SESSION["maxHeart"];

$sql = "INSERT INTO user_edata(bsug, wght, sbp, dbp, restHeart, minHeart, maxHeart,user_id)VALUES ('$bsug' ,'$wght', '$sbp', '$dbp','$restHeart','$minHeart','$maxHeart','$user_id')";

if(!mysqli_query($con,$sql)){
	header("location: edata.php");
	exit();
}
else{
	header("location: edata.php");
	exit();
}


?>