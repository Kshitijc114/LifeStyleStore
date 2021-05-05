<?php
error_reporting(E_ALL ^ E_NOTICE);
$con = mysqli_connect("localhost", "root", "", "trial") or die(mysqli_error($con));

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>



