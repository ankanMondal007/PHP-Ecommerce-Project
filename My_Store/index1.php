<?php
  require("include/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>



<!DOCTYPE HTML>
<html>
    <head>
        <title>Bootstrap Introduction</title>


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .banner_image{
                padding-top: 75px;
                margin-top: 0px;
                padding-bottom: 50px;
                text-align: center;
                color: #f8f8f8;
                background: url(C:/Users/Ankan/Desktop/HTML-CSS-Assignment/intro-bg_1.jpg) no-repeat center center;
                background-size: cover;
                min-height: 600px;
            }
            .navbar{
                margin-bottom: 0px;
            }
            .banner_content{
             position: relative;
             padding-top: 6%;
             padding-bottom: 6%;
             margin-top: 6%;
             margin-left: 22%;
             margin-bottom: 12%;
             background-color: rgba(0, 0, 0, 0.7);
             max-width: 660px;
             font-weight: bolder;
             font-size: 18px;
             font-family: Roboto sans-serif;
             font-style: bold;
            }


            footer{
                padding: 10px 0;
                 background-color: #101010;
                 color:#9d9d9d;
                 bottom: 0;
                 width: 100%;
                font-size: 18px;
            }
        </style>
    </head>
    <body>
    
    	
        <!-- Header -->
        <?php
        include 'include/header.php';
        ?>
        <!--Header end-->
    
    
            <div class="banner_image">
                <div class="container">
                    <div class="banner_content">
                        <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p><br>
                        <a href="products.html" class="btn btn-danger btn-lg active”">Shop Now</a>
                    </div>
                </div>
            </div>
              
            
        <!--Footer-->
        <?php
        include 'include/footer.php';
        ?>
        <!--Footer end-->
                
     </body>
</html>