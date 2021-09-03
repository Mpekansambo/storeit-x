<?php
//session_start();
$error="";
$mysqli = new mysqli("localhost", "root", "", "storage");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
/*
$ID = $_POST['username'];
$Password = $_POST['password'];
*/
//function SignIn()
include "encrypt.php";
if(isset($_POST['submit']))
{   //starting the session for user profile page
if(!empty($_POST['User']) && !empty($_POST['Password']))   //checking the 'user' name which is from Sign-In.html, is it empty or 
{
	$user = encrypt_decrypt('encrypt', $_POST[User]);
	$pass = encrypt_decrypt('encrypt', $_POST[Password]);
	$result = $mysqli->query("SELECT *  FROM registration where Username = '$user' AND Password = '$pass'"); 
      while($row = $result->fetch_assoc()){
		 $name = $row['Username'];
		  $pass = $row['Password'];
		  $username = $row['First Name'];
		   if ($_POST['username'] = $name  && $_POST['password'] = $pass ){
			   //$_SESSION['username'] = $username;
		  header ("location:/Storeit/home.php");
		  } 
		  elseif($name = $_SESSION['username'] && $_SESSION["password"]!= $pass){
			  $error1="enter correct password";
		  }elseif($_SESSION['username']!= $name && $_SESSION["password"]= $pass){
			  $error="enter correct username";
		  }
		  
	  }
	  $error="invalid password and username";
}elseif(empty($_POST['username'])||empty($_POST['password'])){
	$error1="enter collect username and password";
}
else{
	$error="enter your password";
}	  
	}

?>

