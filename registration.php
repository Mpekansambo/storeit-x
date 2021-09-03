<?php
//session_start();
//$sens=$_SESSION['username'];
//$error="welcome ".$sens;
$mysqli = new mysqli("localhost", "root", "", "storage");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/*
$ID = $_POST['username'];
$Password = $_POST['password'];
*/
if(isset($_POST['submit2']))
{   //starting the session for user profile page
if(!empty($_POST['text4']) && !empty($_POST['text5']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	include "encrypt.php";
	$text1 = encrypt_decrypt('encrypt', $_POST['text1']);
	$text2 = encrypt_decrypt('encrypt', $_POST['text2']);
	$text3 = encrypt_decrypt('encrypt', $_POST['text3']);
	$text4 = encrypt_decrypt('encrypt', $_POST['text4']);
	$text5 = encrypt_decrypt('encrypt', $_POST['text5']);
	$text6 = encrypt_decrypt('encrypt', $_POST['text6']);
	$text7 = encrypt_decrypt('encrypt', $_POST['text7']);

	$result = $mysqli->query("INSERT INTO registration(FirstName, Surname, gender, Username, Password, EMail, Date ) VALUES('$text1', '$text2', '$text3', '$text4', '$text5', '$text6', '$text7')");
	//or die(mysql_error());
	//$query = mysql_query("SELECT *  FROM user where Username = '$_POST[username]' AND Password = '$_POST[password]'") or die(mysql_error());
	if($result==TRUE){
$sql2 = "CREATE TABLE $text4(
documenttype int(6) NOT NULL, 
Filename VARCHAR(500) NOT NULL,
location VARCHAR(500) NOT NULL,
Date Date(30) NOT NULL,)";
echo $mysqli->error;

if ($mysqli->query($sql2) === TRUE) {
 $error="member added: name".$_POST['text1'];
} else {
    $error="Error creating table: " . $mysqli->error;
}

$mysqli->close(); 
    
} else {
    $error="Error creating table: " . $mysqli->error;
}
$error="Sorry Please enter your information";
	}
}
?>
