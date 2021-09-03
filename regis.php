<?php
$mysqli = new mysqli("localhost", "root", "", "storage");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
if(isset($_POST['submit']))
{ 
if(!empty($_POST['text1'])){ 
$text1=$_POST['text1'];
$text2=$_POST['text2'];
$text3=$_POST['text3'];
$text4=$_POST['text4'];
$text5=$_POST['text5'];
$text6=$_POST['text6'];
$text7=$_POST['text7'];
	$result = $mysqli->query("INSERT INTO registration(FirstName, Surname, Gender, Username, Password, E-mail, Date1)VALUES('$text1','$text2','$text3','$text4','$text5','$text6','$text7')");
	//or die(mysql_error());
	//$query = mysql_query("SELECT *  FROM user where Username = '$_POST[username]' AND Password = '$_POST[password]'") or die(mysql_error());
	if($result===TRUE){
echo $text2;
echo "hello mamu";
}
else{
	echo md5($text1);
	echo md5($text2);
	echo md5($text3);
	echo md5($text4);
	echo md5($text5);
	echo md5($text7);
	echo md5($text6);
	echo md5('hello dad');
}
}else{
	echo $text2;
	echo "how are yoou";
}
}
echo $text2;
//ech;
?>