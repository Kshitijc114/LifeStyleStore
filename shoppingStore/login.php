<?php
error_reporting(E_ALL ^ E_NOTICE);
    require 'includes/common.php';
    $email = $_SESSION['email'];
    if (isset($email)) {

    header('Location: products.php');
}
?>
<!DOCTYPE html>
<html>  
    <head>
        <!--- The page has a title Lifestyle Store-->
        <title>Login | Lifestyle Store</title>
        
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
            <div class="row row_style col-lg-offset-3 col-md-offset-3 col-xs-offset-2 col-lg-6 col-md-6 col-xs-8">
                <div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning"><h5 class="text-warning">Login to make a purchase</h5></p>
                        <form method = "POST" action="login_submit.php">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" pattern ="[A-Za-z]{.6}" required>
                            </div>
                            <button type="submit" class="btn btn-primary ">Login</button><br><br>
                        </form>
                        </div>
                        <div class="panel-footer">
                            Don't have an account? <a href="signup.php">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
