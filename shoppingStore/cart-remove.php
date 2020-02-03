<?php
error_reporting(E_ALL ^ E_NOTICE);
require "includes/common.php";
include 'includes/get_user_id.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET["id"];
    //$user_id = $_SESSION['user_id'];
    $query = "DELETE FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' ";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    header("location: cart.php");
}
