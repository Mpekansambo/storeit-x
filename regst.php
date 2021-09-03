<?php
$errors = array(); 
// initializing variables
// connect to the database
 $text1 = $_POST['text8'];
  $text2 = $_POST['text9'];
  $text3 = $_POST['text10'];
  $text4 = $_POST['text11'];
  $text5 = $_POST['text12'];
  $text6 = $_POST['text13'];
  $text7 = $_POST['text14'];
$mysqli = new mysqli("localhost", "root", "", "storage");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
// REGISTER USER
if (isset($_POST['submit2'])) { 
  // receive all input values from the form
  /*
  $text1 = mysqli_real_escape_string($mysqli, $_POST['text8']);
  $text2 = mysqli_real_escape_string($mysqli, $_POST['text9']);
  $text3 = mysqli_real_escape_string($mysqli, $_POST['text10']);
  $text4 = mysqli_real_escape_string($mysqli, $_POST['text11']);
  $text5 = mysqli_real_escape_string($mysqli, $_POST['text12']);
  $text6 = mysqli_real_escape_string($mysqli, $_POST['text13']);
  $text7 = mysqli_real_escape_string($mysqli, $_POST['text14']);
  */
 
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($text1)) { array_push($errors, "Firstname is required"); }
  if (empty($text2)) { array_push($errors, "surname is required"); }
  if (empty($text3)) { array_push($errors, "Gender is required"); }
  if (empty($text4)) { array_push($errors, "Username is required"); }
  if (empty($text5)) { array_push($errors, "Passwordis required"); }
  if (empty($text6)) { array_push($errors, "E-mail is required"); }
  if (empty($text7)) { array_push($errors, "Date is required"); }
  $texta=md5($text1);
  $textb=md5($text2);
  $textc=md5($text3);
  $textd=md5($text4);
  $texte=md5($text5);
  $textf=md5($text6);
  $textg=md5($text7);

  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registration WHERE Username='$textd' OR Password='$texte' LIMIT 1";
  $result = mysqli_query($mysqli, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user==TRUE) { // if user exists
  echo "welcome dude";
    if ($user['Username'] === $text4) {
      array_push($errors, "Username already exists");
    }

    if ($user['Password'] === $text5) {
      array_push($errors, "password already exists");
    }
  }
  echo "welcome dude1";

  // Finally, register user if there are no errors in the form
  $k=count($errors);
  echo $k;
  if (count($errors) == 0) {

  	$query = "INSERT INTO registration (Firstname, Surname, Gender, Username, Password, Email, Date1) 
  			 VALUES( '$texta','$textb','$textc','$textd','$texte','$textf','$textg')";
  	mysqli_query($mysqli, $query);
  	header('location: index.php');
  }
  echo $query;
}else{
$error='not inserted';
}
?>