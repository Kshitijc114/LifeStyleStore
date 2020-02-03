<?php
error_reporting(E_ALL ^ E_NOTICE);
require 'includes/common.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <!--- The page has a title Lifestyle Store-->
        <title>Cart | Lifestyle Store</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
        <!--- External css file index.css placed in the folder css is linked-->
        <link href="style.css" rel="stylesheet" type="text/css"/>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head> 
    <body style="padding-top: 50px;">
        <?php
        include 'includes/header.php';
        ?> 
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-8 col-md-6 col-lg-12 col-md-8">

                    <table class="table table-striped table-responsive" id="cart">

                        <?php
                        $sum = 0;
                        include 'includes/get_user_id.php';
                        //$user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>" . "#" . $row["id"] . "</td>
                                              <td>" . $row["Name"] . "</td>
                                              <td>Rs " . $row["Price"] . "</td>
                                              <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> X </a></td>
                                          </tr>";
                                }
                                $id = rtrim($id, ",");
                                echo "<tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs " . $sum . "</td>
                                          <td><a href='success.php?item_id=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                                          </tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<center><h2>Add items to the cart first!</h2></center>";
                        }
                        ?>
                    </table>
                </div>
             </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
