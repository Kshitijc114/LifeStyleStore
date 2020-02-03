<?php
error_reporting(E_ALL ^ E_NOTICE);
    include 'includes/common.php';
    $email= $_SESSION['email'];
    //$user_query = "SELECT id FROM users WHERE email = '$email'";
    $user_query = "SELECT id FROM users WHERE email = '" . $_SESSION['email'] . "'";
    $result = mysqli_query($con, $user_query)or die($mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $user_id = $row['id'];
?>
