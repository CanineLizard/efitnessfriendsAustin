<?php
$con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');
session_start();


	$user_id = $_SESSION["userid"];
	$comments = $_POST['comments'];	

$sql = "INSERT INTO user_comments(user_id,comments) VALUES('$user_id','$comments')";


if(!mysqli_query($con,$sql)){
	

header("location: dashboard.php");
	exit();
}
else{

header("location: dashboard.php");
	exit();

}
?>