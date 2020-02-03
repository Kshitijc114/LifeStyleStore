<?php
error_reporting(E_ALL ^ E_NOTICE);
require 'includes/common.php';
$email = $_SESSION['email'];

if(!isset($email)){
     header('Location: homepage.php');
}

$old_password = mysqli_real_escape_string($con, $_POST['old_password']);
$new_password = mysqli_real_escape_string($con, $_POST['new_password']); 
$rtnew_password = mysqli_real_escape_string($con, $_POST['rtnew_password']);

if(strlen($new_password) != strlen($rtnew_password)) {  
    echo 'password length does not match';
}
$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);

$current_pass = $row['password'];

//check old password and password taken from db
if ($new_password != $rtnew_password) {
    header('location: settings.php?error=The two passwords don\'t match.');
} else {
    if ($old_password == $current_pass) {
        $query = "UPDATE users SET password = '" . $new_password . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=Password Updated Successfully');
    } else {
        header('location: settings.php?error=Incorrect Current Password.');
        /*?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php*/
}
}
