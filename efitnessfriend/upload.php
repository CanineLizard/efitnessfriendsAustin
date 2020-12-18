<?php
session_start();
$con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');
$id = $_SESSION['userid'];

if(isset($_POST['submit'])){
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');

  if(in_array($fileActualExt, $allowed)) {
    if($fileError === 0) {
      if($fileSize < 1000000) {
        $fileNameNew = "profile".$id.".".$fileActualExt;
        $fileDestination = 'uploads/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        $sql = "UPDATE profileimg SET status=0 WHERE userid='$id'";
        $result = mysqli_query($con, $sql);
        header("Location: profile.php");
      } else {
        echo "Your file is too big";
      }
    } else {
      echo "there was an error uploading your file";
    }
  } else {
    echo "you cannot uplaod files of this type!";
  }
}
 ?>
