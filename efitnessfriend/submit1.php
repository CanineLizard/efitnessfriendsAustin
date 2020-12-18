<?php
$con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');

if(!$con){

	echo 'Databse Not Connected To Server';
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username,password) VALUES ('$username', '$password')";

if(!mysqli_query($con,$sql)){
	
	echo 'not inserted';
}
else{
	
	echo 'Inserted';
}
?>