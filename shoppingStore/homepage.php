<?php
error_reporting(E_ALL ^ E_NOTICE);
require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <!--- The page has a title Lifestyle Store-->
        <title>Welcome | Lifestyle Store</title>
        
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
        <div id="banner_image">
            <div class="container-fluid">
                    <div id="banner_content">
                        <h1>We sell lifestyle.</h1>
                        <p><h5>Flat 40% OFF on premium brands</h5></p><br>
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop now</a>
                    </div>
            </div>
        </div>        
        
        <div class="container" style="padding-top: 50px ">
       
            <div class="row">
                <div class="col-xs-4" id="thumbnail"> 
                    <div class="thumbnail">
                        <a href="products.php#cameras"><img src="bootstrap/img/camera.jpg" class="img-rounded img-responsive"  alt="image not available"></a>
                    <div class="caption"> 
                        <h2>Cameras</h2> 
                        <p><h4>Choose among the best available in the world.</h4></p> 
                    </div> 
                </div>
            </div>
            <div class="col-xs-4" id="thumbnail"> 
                <div class="thumbnail">
                    <a href="products.php#watches"><img src="bootstrap/img/watch.jpg" class="img-rounded img-responsive"  alt="image not available"></a>
                    <div class="caption"> 
                        <h2>Watches</h2>
                        <p><center><h4>Original watches from the best brands.</h4></center></p> 
                    </div> 
                </div>
            </div>
            <div class="col-xs-4" id="thumbnail"> 
                <div class="thumbnail">
                    <a href="products.php#shirts"><img src="bootstrap/img/shirt.jpg" class="img-rounded img-responsive"  alt="image not available"></a>
                    <div class="caption"> 
                        <h2>Shirts</h2> 
                        <p><h4>Our exquisite collection of shirts.</h4></p> 
                        <br>
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
