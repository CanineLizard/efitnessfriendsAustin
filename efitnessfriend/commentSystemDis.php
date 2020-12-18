<?php
 $con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');


 function setUserComments($con){
 	if(isset($_POST['commentSubmit'])){
	$user_id = $_SESSION["userid"];
 	$date = $_POST['date'];
 	$message = $_POST['message'];

 	$sql = "INSERT INTO user_comments (user_id, date, message) VALUES ('$user_id','$date', '$message')";
 	$result = $con->query($sql);	


 	}



 }

 function getUserComments($con){

 	$sql = "SELECT * FROM user_comments";
 	$result = $con->query($sql);
 		$user_id = $_SESSION["userid"];
 	while ($row = $result->fetch_assoc()){
 		echo "<div class='comment-box'><p>";
 echo "<p>" . $_SESSION["useruid"] . "</p>";
 	    echo $row['date']."<br></br>";
 		echo $row['message']. "<br>";
 		echo "<p> ------------------------------</p>";
 		echo "</p></div>";
 	
 	}
 
 }


 ?>