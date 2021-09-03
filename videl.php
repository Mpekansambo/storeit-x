<?php
error_reporting(E_ERROR| E_WARNING| E_PARSE| E_NOTICE);?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "storage";
	$text1 = "davison";
$text2 = "phiri";
$text3 = "male";
$text4    = "davish1243r";
$text5   = "resg1243";
$text6    = "davison191p@gmail.com";
$text7    = "22/01/2020";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $text1 = mysqli_real_escape_string($mysqli, $text1);
  $text2 = mysqli_real_escape_string($mysqli, $text2);
  $text3 = mysqli_real_escape_string($mysqli, $text3);
  $text4 = mysqli_real_escape_string($mysqli, $text4);
  $text5 = mysqli_real_escape_string($mysqli, $text5);
  $text6 = mysqli_real_escape_string($mysqli, $text6);
  $text7 = mysqli_real_escape_string($mysqli, $text7);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($text1)) { array_push($errors, "Firstname is required"); }
  if (empty($text2)) { array_push($errors, "surname is required"); }
  if (empty($text3)) { array_push($errors, "Gender is required"); }
  if (empty($text4)) { array_push($errors, "Username is required"); }
  if (empty($text5)) { array_push($errors, "Passwordis required"); }
  if (empty($text6)) { array_push($errors, "E-mail is required"); }
  if (empty($text7)) { array_push($errors, "Date is required"); }
  $text1=md5($text1);
  $text2=md5($text2);
  $text3=md5($text3);
  $text4=md5($text4);
  $text5=md5($text5);
  $text6=md5($text6);
  $text7=md5($text7);
    $sql = "INSERT INTO registration(Firstname, Surname, Gender, Username, Password, Email, Date1)
    VALUES ('$text1', '$text2', '$text3', '$text4', '$text5', '$text6', '$text7')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>