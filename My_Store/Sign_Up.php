<?php
require("include/common.php");


if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!-- saved from url=(0045)file:///C:/Users/Ankan/Desktop/Sign%20Up.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title></title>



        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style >
            .button{
                background-color: #127bd6;
                font-weight: 
            }


            footer{
                padding: 10px 0;
                 background-color: #101010;
                 color:#9d9d9d;
                 bottom: 0;
                 width: 100%;
                font-size: 18px;
            }
            .con{
                margin-left: 350px;
                margin-right: 300px;
            }

        </style>

</head>
<body>

    <?php include "include/header.php"; ?><br><br>

            <center>
            <div class="container">
            	
            		<div class="row">
            			<div class="col-xs-4">
            				<h1>Sign Up</h1>


                                     <form  action="signup_script.php" method="POST">

                        <div class="form-group col-sm-10">
                            <input class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="number" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                                <?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="City" name="city"  >
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" >
                        </div>

                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>  
                        <div class="col-sm-10">
                                  Already have an account ?<a href="login.php"> Login</a>
                        </div>

                </form>
            	
                    
            	
            </div>
        </div>
    </center>
            <br>
            <br>
 	
      <?php include "include/footer.php"; ?>
</body>
</html>