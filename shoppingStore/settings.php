<?php
error_reporting(E_ALL ^ E_NOTICE);
require 'includes/common.php';
if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
$email = $_SESSION['email'];
if (!isset($email)) {
 
    header('Location: products.php');
}
?>
<!DOCTYPE html>

<html>
    <head>
        <!--- The page has a title Lifestyle Store-->
        <title>Settings | Lifestyle Store</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
        <!--- External css file index.css placed in the folder css is linked-->
        <link href="style.css" rel="stylesheet" type="text/css"/>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head> 
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
            <div class="row row_style col-xs-10 col-md-4 col-lg-6 col-lg-offset-3 col-md-offset-4 col-xs-offset-1">
                <h3>Change Password</h3>
                <form action="settings_script.php" method="POST">
                <div class="form-group">
                    <input type="password" name="old_password"class="form-control" placeholder="Old Password" required>
                </div>
                <div class="form-group">
                    <input type="password" name="new_password" class="form-control" placeholder="New Password" required>
                </div>
                <div class="form-group">
                    <input type="password" name="rtnew_password" class="form-control" placeholder="Re-Type New Password" required>
                </div>
                <div class="form-group"><button type="submit" class="btn btn-primary">Update Password</button></div>    
                </form>
            </div>
         </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
