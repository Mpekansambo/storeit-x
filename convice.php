<?php
session_start();
$error="";
$error1="";
$uss=" ";
$pss=" ";
$uss1=" ";
$pss1=" ";
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
if(isset($_POST['submit']))
{   //starting the session for user profile page
if(!empty($_POST['username']) && !empty($_POST['password']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
$uss = $_POST['username'];
$pss = $_POST['password'];
$uss1 = md5($uss);
$pss1 = md5($pss);
	
	$result = $mysqli->query("SELECT *  FROM registration where Username = '$uss1' AND Password = '$pss1'"); 
	//or die(mysql_error());
	//$query = mysql_query("SELECT *  FROM user where Username = '$_POST[username]' AND Password = '$_POST[password]'") or die(mysql_error());
      while($row = $result->fetch_assoc()){
		 $name = $row['Username'];
		  $pass = $row['Password'];
		  $username = $row['Firstname'];
		  $_SESSION['username'] = $_POST['username'];
		  $_SESSION["password"] = $_POST['password'];
		  // if ($uss1 == $name  && $pass == $pss1){
		  header ("location: home.php");
		  /*} 
		  elseif($name == md5($_SESSION['username']) && md5($_SESSION["password"])!= $pass){
			  $error1="enter correct password";
		  }
		  /*elseif(md5($_SESSION['username'])!= $name && md5($_SESSION["password"])= $pass){
			  $error="enter correct username";
		  } */
	  }
	  echo "<script>alert('Invalid username and/or password')</script>";
}elseif(empty($_POST['username'])&& !empty($_POST['password'])){
	echo "<script>alert('Enter Username')</script>";
}elseif(!empty($_POST['username'])&& empty($_POST['password'])){
	echo "<script>alert('Enter Password')</script>";
}
else{
	echo "<script>alert('Please Fill in the fields')</script>";
}	  
	//$row = mysql_fetch_array($query) or die(mysql_error());
        
        
	//if(!empty($row['Username']) && !empty($row['Password']))
	//{
		//$_SESSION['username'] = $row['Username'];
		//echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
                
				
					
				//}

	}

?>