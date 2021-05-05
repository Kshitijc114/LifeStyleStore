<?php
error_reporting(E_ALL ^ E_NOTICE);
require 'includes/common.php';
if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
    echo "Invalid email format<br>";
}if (strlen($password) < 6) {
  echo "Invalid password format<br>";
}
//$password = ($password);

//use insert query and store the data in the database.
$con = mysqli_connect("shareddb-s.hosting.stackcp.net", "kshitij", "password@storeDB", "storeDB-313235f8a1") or die(mysqli_error($con));

//$query = "SELECT email, password FROM users";
$query = ("SELECT * FROM users where email = '$email' AND password = '$password'") or die(mysqli_error($con)); 
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
if(!empty($row['email']) AND !empty($row['password'])) { 
        //$_SESSION['email'] = $row['password']; 
        $_SESSION['email'] = $email;
        //$_SESSION['id'] = mysqli_insert_id($con);
        
        header("Location: products.php");
		exit();
        echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
    } else { 
        
        header("Location: login_retry.php");
		exit();
        echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
    } 
   


/*else{
    $row = mysqli_fetch_array($result);
    header("Location: products.php");
    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($con);
}*/

