<?php
error_reporting(E_ALL ^ E_NOTICE);
require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <!--- The page has a title Lifestyle Store-->
        <title>Products | Lifestyle Store</title>
        
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
        include 'includes/check-if-added.php';
        ?>
        <div class="container-fluid">
            <div class="jumbotron">
                <h1> Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
            <hr>
            <br><br>
                <div class="row text-center container-fluid" id="cameras">
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="thumbnail">
                        <img src="bootstrap/img/5.jpg" class="img-responsive"  alt="image not available">
                        <div class="caption"> 
                            <h2>Canon EOS</h2>
                            <p><h4>Price: Rs. 36,000.00</h4><p>
                            <?php if (!isset($_SESSION['email'])) { ?> 
                                
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php
                                } else { //We have created a function to check whether this particular product is added to cart or not. 
                                    
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0) 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                    else { ?> 
                                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                        <?php
                                    }
                                } ?>  
                        </div> 
                    </div>
                </div>
            

                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="thumbnail">
                        <img src="bootstrap/img/2.jpg" class="img-responsive"  alt="image not available">
                        <div class="caption"> 
                            <h2>Nikon EOS</h2>
                            <p><h4>Price: Rs. 40,000.00</h4><p>
                                
                                <?php if (!isset($_SESSION['email'])) { ?> 
                                
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php
                                } else { //We have created a function to check whether this particular product is added to cart or not. 
                                    
                                    if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0) 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                    else { ?> 
                                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                        <?php
                                    }
                                } ?>      
                        </div> 
                    </div>
                </div>

            
                    
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="thumbnail">
                        <img src="bootstrap/img/3.jpg" class="img-responsive"  alt="image not available">
                        <div class="caption"> 
                            <h2>Sony DSLR</h2>
                            <p><h4>Price: Rs. 50,000.00</h4><p>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                                
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                
                                <?php
                                } else { //We have created a function to check whether this particular product is added to cart or not. 
                                    
                                    if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0) 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                    else { ?> 
                                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                        <?php
                                    }
                                } ?>
                        </div> 
                    </div>  
                </div>
            
            
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="thumbnail">
                        <img src="bootstrap/img/4.jpg" class="img-responsive"  alt="image not available">
                        <div class="caption"> 
                            <h2>Olympus DSLR</h2>
                            <p><h4>Price: Rs. 50,000.00</h4><p>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                                
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                
                                <?php
                                } else { //We have created a function to check whether this particular product is added to cart or not. 
                                    
                                    if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0) 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                    else { ?> 
                                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                        <?php
                                    }
                                } ?>
                        </div> 
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row text-center container-fluid"  id="watches">
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="thumbnail">
                        <img src="bootstrap/img/9.jpg" class="img-responsive"  alt="image not available">
                        <div class="caption"> 
                            <h2>Titan  Model #78</h2>
                            <p><h4>Price: Rs. 13,000.00</h4><p>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                                
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                
                                <?php
                                } else { //We have created a function to check whether this particular product is added to cart or not. 
                                    
                                    if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0) 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                    else { ?> 
                                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                        <?php
                                    }
                                } ?>
                        </div> 
                    </div>
                </div>
            

                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="thumbnail">
                        <img src="bootstrap/img/10.jpg" class="img-responsive"  alt="image not available">
                        <div class="caption"> 
                            <h2>Titan Model #07</h2>
                            <p><h4>Price: Rs. 3000.00</h4><p>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                                
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                
                                <?php
                                } else { //We have created a function to check whether this particular product is added to cart or not. 
                                    
                                    if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0) 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                    else { ?> 
                                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                        <?php
                                    }
                                } ?>
                        </div> 
                    </div>
                </div>

            
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="thumbnail">
                        <img src="bootstrap/img/11.jpg" class="img-responsive"  alt="image not available">
                        <div class="caption"> 
                            <h2>HMT Milan</h2>
                            <p><h4>Price: Rs. 8000.00</h4><p>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                                
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                
                                <?php
                                } else { //We have created a function to check whether this particular product is added to cart or not. 
                                    
                                    if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0) 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                    else { ?> 
                                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                        <?php
                                    }
                                } ?>
                        </div> 
                    </div>
                </div>
            
            
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="thumbnail">
                        <img src="bootstrap/img/8.jpg" class="img-responsive"  alt="image not available">
                        <div class="caption"> 
                            <h2>Faber Luba #111</h2>
                            <p><h4>Price: Rs. 18,000.00</h4><p>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                                
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                
                                <?php
                                } else{ //We have created a function to check whether this particular product is added to cart or not. 
                                    
                                    if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0) 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                    else { ?> 
                                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                        <?php
                                    }
                                }  ?> 
                        </div> 
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row text-center container-fluid" id="shirts">
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="thumbnail">
                        <img src="bootstrap/img/16.jpg" class="img-responsive" alt="image not available">
                        <div class="caption"> 
                            <br>
                            <h2>H&W</h2>
                            <p><h4>Price: Rs. 800.00</h4><p>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                                
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                
                                <?php
                                } else { //We have created a function to check whether this particular product is added to cart or not. 
                                    
                                    if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0) 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                    else { ?> 
                                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                        <?php
                                    }
                                } ?>
                        </div> 
                    </div>
                </div>
            

                <div class="col-xs-12 col-md-8 col-lg-3">
                    <div class="thumbnail">
                        <img src="bootstrap/img/15.jpg" class="img-responsive"  alt="image not available">
                        <div class="caption"> 
                            <h2>Luis Phil</h2>
                            <p><h4>Price: Rs. 1000.00</h4><p>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                                
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                
                                <?php
                                } else { //We have created a function to check whether this particular product is added to cart or not. 
                                    
                                    if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0) 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                    else { ?> 
                                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                        <?php
                                    }
                                } ?>
                        </div> 
                    </div>
                </div>

            
                <div class="col-xs-12 col-md-8 col-lg-3">
                    <div class="thumbnail">
                        <img src="bootstrap/img/13.jpg" class="img-responsive"  alt="image not available">
                        <div class="caption"> 
                            <h2>John Zok</h2>
                            <p><h4>Price: Rs. 1500.00</h4><p>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                                
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php
                                } else { //We have created a function to check whether this particular product is added to cart or not. 
                                    
                                    if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0) 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                    else { ?> 
                                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                        <?php
                                    }
                                } ?>
                                
                        </div> 
                    </div>
                </div>
            
            
                <div class="col-xs-12 col-md-8 col-lg-3">
                    <div class="thumbnail">
                        <img src="bootstrap/img/14.jpg" class="img-responsive"  alt="image not available">
                        <div class="caption"> 
                            <h2>Jhalsani</h2>
                            <p><h4>Price: Rs. 1300.00</h4><p>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                                
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                
                                <?php
                                } else { //We have created a function to check whether this particular product is added to cart or not. 
                                    
                                    if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0) 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } 
                                    else { ?> 
                                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                        <?php
                                    }
                                } ?>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        
        <hr>
        <footer>  
            <div class="container-fluid">
                <center>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center>
            </div>
        </footer>
    </body>
</html>

