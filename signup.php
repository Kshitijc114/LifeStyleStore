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
        <title>Signup | Lifestyle Store</title>
        
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
           <div class="row row_style col-lg-offset-3 col-md-offset-3 col-xs-offset-1 col-lg-6 col-md-6 col-xs-10">
               <div>
                   <h1>Sign-up</h1>
                   <form method="POST" action="signup_script.php">
                        <div class="form-group " >
                            <label for="Name"></label>
                            <input type="text" class="form-control"  name="name" placeholder="Name" required>
                            
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" size="10" class="form-control" name="contact" placeholder="Contact" pattern="[0-9]{10}" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        
                        <div class="form-group"><button type="submit" class="btn btn-primary btn-block">Submit</button></div>
                       
                        <div class="form-group" style="text-align: center"><button type="reset" class="btn">Reset</button></div>
                    </form>
                </div>
           </div>   
       </div>
        
        <?php
        include 'includes/footer.php';
        ?>
        
    </body>
</html>