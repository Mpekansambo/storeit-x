<?php
// initializing variables
$firstname = "";
$surname = "";
$username = "";
$email    = "";
$errors = array(); 
// connect to the database
$mysqli = new mysqli("localhost", "root", "", "storage");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
// REGISTER USER
if (isset($_POST['submitR'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($mysqli, $_POST['firstname']);
  $surname = mysqli_real_escape_string($mysqli, $_POST['surname']);
  $username = mysqli_real_escape_string($mysqli, $_POST['username']);
  $email = mysqli_real_escape_string($mysqli, $_POST['email']);
  $gender = mysqli_real_escape_string($mysqli, $_POST['Gender']);
  $password = mysqli_real_escape_string($mysqli, $_POST['password']);
  $firstname=md5($firstname);
  $surname=md5($surname);
  $username=md5($username);
  $email=md5($email);
  $gender=md5($gender);
  $password=md5($password);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "Firstname is required"); }
  if (empty($surname)) { array_push($errors, "surname is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registration WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($mysqli, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user==TRUE) { // if user exists
    if ($user['Username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['EMail'] === $email) {
      array_push($errors, "email already exists");
    }
  }
  $day = date("Y-m-d");
  // Finally, register user if there are no errors in the form
  	$query = "INSERT INTO registration(FirstName, Surname, Gender, UserName, Password, EMail, Date) 
  			  VALUES('$firstname', '$surname', '$gender', '$username', '$password', '$email','$day' )";
			  if ($mysqli->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $mysqli->error;
}
  } 	
?>