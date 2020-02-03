<?php
error_reporting(E_ALL ^ E_NOTICE);
$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>



