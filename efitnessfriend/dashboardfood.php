<?php
session_start();
$con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');

if(!$con){

	echo 'Databse Not Connected To Server';
}

$timeOfDay = $_POST['timeOfDay'];
$foodType = $_POST['foodType'];
$foodAmount = $_POST['foodAmount'];
$foodCalories = $_POST['foodCalories'];
$user_id = $_SESSION["userid"];

$sql = "INSERT INTO user_meals(timeOfDay,foodType,foodAmount,foodCalories,user_id)VALUES ('$timeOfDay' ,'$foodType','$foodAmount', '$foodCalories','$user_id')";






if(!mysqli_query($con,$sql)){
	
header("location: dashboard.php");
	exit();
}
else{
header("location: dashboard.php");
	exit();
}










?>