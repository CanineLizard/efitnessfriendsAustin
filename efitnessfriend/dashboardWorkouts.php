<?php
session_start();
$con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');

if(!$con){

	echo 'Databse Not Connected To Server';
}

$userWorkout = $_POST['userWorkout'];
$userRepMiles = $_POST['userRepMiles'];
$userCaloriesBurned = $_POST['userCaloriesBurned'];
$user_id = $_SESSION["userid"];

$sql = "INSERT INTO user_workouts(userWorkout,userRepMiles,userCaloriesBurned,user_id)VALUES ('$userWorkout' ,'$userRepMiles','$userCaloriesBurned','$user_id')";






if(!mysqli_query($con,$sql)){
	
header("location: dashboard.php");
	exit();
}
else{
header("location: dashboard.php");
	exit();
}










?>