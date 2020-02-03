<?php
error_reporting(E_ALL ^ E_NOTICE);
require 'includes/common.php';
if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
$email = mysqli_real_escape_string($con, $_POST['email']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$contact = $_POST['contact'];
$address = mysqli_real_escape_string($con, $_POST['address']);
$city= $_POST['city'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
    echo "Invalid email format<br>";
}
if (strlen($password) < 6) {
  echo "Invalid password format<br>";
}

/*
$query = ("SELECT email FROM users) or die(mysqli_error($con)); 
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
if ($row > 0){
$user_registration_query = "insert into users(name, email, password, contact, city, address) values ('$name', '$email', '$password', '$contact', '$city', '$address')" or die(mysqli_error($con));
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
    }
?>
*/
$user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
$result = mysqli_query($con, $user_check_query);
$user = mysqli_fetch_assoc($result);
  
 // if ($user) { // if user exists
    if ($user['email'] === $email) {
      header('location: signup_retry.php');
    }
 // }

  // Finally, register user if there are no errors in the form
  else if (count($errors) == 0) {
  	//$password = ($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$password', '$contact', '$city', '$address')";
  	mysqli_query($con, $query);
  	$_SESSION['email'] = $email;
  	header('location: products.php');
  }
  