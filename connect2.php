<?php
//session_start();

//initializing veriables

//connnect to the database

$db= mysqli_connect('localhost','root','','workhard');

//registration us
if (isset($_POST['submit'])) {
$username= mysqli_real_escape_string($db,$_POST['username']);
$email= mysqli_real_escape_string($db, $_POST['email']);
$password= mysqli_real_escape_string($db,$_POST['password']);


  $sql="INSERT INTO service (username,email,password) VALUES ('$username','$email','$password')" ;
  mysqli_query($db,$sql);
  $_SESSION['message']="you arelogged in";
  $_SESSION['username']=$username;
  header("location:project.php");

}


  ?>