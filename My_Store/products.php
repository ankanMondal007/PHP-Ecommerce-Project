

<?php
include "include/common.php"
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style >
	
	h1{
		font-weight: 48px;
		font-style: bold;
		font-size: 30px;
		font-family: Roboto sans-serif;
	}


            footer{
                padding: 10px 0;
                 background-color: #101010;
                 color:#9d9d9d;
                 bottom: 0;
                 width: 100%;
                font-size: 18px;
            }

            body{
            
                background: url(C:/Users/Ankan/Desktop/HTML-CSS-Assignment/4.jpg) no-repeat center center;
            }
</style>
</head>
<body>
       <!-- Header file -->
    <?php
        include 'include/header.php';
        include 'include/check_if_added.php';
        
        ?>
    <br>
    <br>

            <div class="container">
            	<div class="jumbotron">
            		<h1>WELCOME TO LIFESTYLE STORE</h1>
            		<p>We have the best cameras, watches and shirts for you. No need to hunt around, we
have all in one place.</p>
            	</div>
            </div>
            <div class="container">
            <div class="row text-center">

            	<div class="col-md-3">
            		<div class="thumbnail">
            			<img src="C:\Users\Ankan\Desktop\HTML-CSS-Assignment\5.jpg" alt="adl">
            			<div class="caption">
            				<h3> Cannon EOS</h3>
            				<p> RS 36,000 </p>
            				  <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
            			</div>
            		</div>
            	</div>

            	<div class="col-md-3">
            		<div class="thumbnail">
            			<img src="C:\Users\Ankan\Desktop\HTML-CSS-Assignment\2.jpg" alt="adl">
            			<div class="caption">
            				<h3> Sony Dslr</h3>
            				<p> RS 40,000 </p>
            				 <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
            			</div>
            		</div>
            	</div>

            	<div class="col-md-3">
            		<div class="thumbnail">
            			<img src="C:\Users\Ankan\Desktop\HTML-CSS-Assignment\3.jpg" alt="adl">
            			<div class="caption">
            				<h3>Sony Dslr</h3>
            				<p> RS 46,000 </p>
            				 <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(14)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
            			</div>
            		</div>
            	</div>

            	<div class="col-md-3">
            		<div class="thumbnail">
            			<img src="C:\Users\Ankan\Desktop\HTML-CSS-Assignment\4.jpg" alt="adl">
            			<div class="caption">
            				<h3> Olympus Dslr</h3>
            				<p> RS 36,000 </p>
            				 <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
            			</div>
            		</div>
            	</div>


            </div> 

            <div class="row text-center">
            		<div class="col-md-3">
            		<div class="thumbnail">
            			<img src="C:\Users\Ankan\Desktop\HTML-CSS-Assignment\9.jpg" alt="adl">
            			<div class="caption">
            				<h3>Titan Model#301</h3>
            				<p> RS 10,000 </p>
            				 <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
            			</div>
            		</div>
            	</div>

            		<div class="col-md-3">
            		<div class="thumbnail">
            			<img src="C:\Users\Ankan\Desktop\HTML-CSS-Assignment\10.jpg" alt="adl">
            			<div class="caption">
            				<h3>Titan Model#302</h3>
            				<p> RS 15,000 </p>
            				 <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
            			</div>
            		</div>
            	</div>

            		<div class="col-md-3">
            		<div class="thumbnail">
            			<img src="C:\Users\Ankan\Desktop\HTML-CSS-Assignment\11.jpg" alt="adl">
            			<div class="caption">
            				<h3>HMT Milan</h3>
            				<p> RS 6,000 </p>
            				 <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
            			</div>
            		</div>
            	</div>

            		<div class="col-md-3">
            		<div class="thumbnail">
            			<img src="C:\Users\Ankan\Desktop\HTML-CSS-Assignment\12.jpg" alt="adl">
            			<div class="caption">
            				<h3> Faber Luca#111</h3>
            				<p> RS 9,000 </p>
            				 <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
            			</div>
            		</div>
            	</div>


            </div>   
            <div class="row text-center">
            		<div class="col-md-3">
            		<div class="thumbnail">
            			<img src="C:\Users\Ankan\Desktop\HTML-CSS-Assignment\6.jpg" alt="adl">
            			<div class="caption">
            				<h3> Luis Phill</h3>
            				<p> RS 1,000 </p>
            				 <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "login.php"   role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
							
            			</div>
            		</div>
            	</div>

            		<div class="col-md-3">
            		<div class="thumbnail">
            			<img src="C:\Users\Ankan\Desktop\HTML-CSS-Assignment\8.jpg" alt="adl">
            			<div class="caption">
            				<h3> H&W </h3>
            				<p> RS 800 </p>
            				 <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
            			</div>
            		</div>
            	</div>

            		<div class="col-md-3">
            		<div class="thumbnail">
            			<img src="C:\Users\Ankan\Desktop\HTML-CSS-Assignment\13.jpg" alt="adl">
            			<div class="caption">
            				<h3> John Zok</h3>
            				<p> RS 1,200 </p>
            				 <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "login.php"   role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(19)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
            			</div>
            		</div>
            	</div>

            		<div class="col-md-3">
            		<div class="thumbnail">
            			<img src="C:\Users\Ankan\Desktop\HTML-CSS-Assignment\14.jpg" alt="adl">
            			<div class="caption">
            				<h3> Jhalsani</h3>
            				<p> RS 1,400 </p>
            				 <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(20)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
            			</div>
            		</div>
            	</div>


            </div>        
        </div>
         <footer>
        <div class="container">
            <center>
                <p>Content is “Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000”.</p>
            </center>
        </div>
    </footer> 
</body>
</html>