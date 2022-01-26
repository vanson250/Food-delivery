<!DOCTYPE html>


<?php
include "config/config.php";

?> 

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->



<?php

session_start();

// For logout

if(isset($_GET["sign"]))
{
	$sign=$_GET["sign"];
	if($sign=="out")
	{
        unset($_SESSION["adminuser"]);
		
		header("location:Home.php");}
    }
    

// For checking if the user logged in

if(isset($_SESSION['adminuser']) == false){
    header("Location:Home.php");
}else{
    ?>


<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } 
        </script>
        <link rel="shortcut icon" href="images/sav.ico">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/javascript" href="js/bootstrap.js">
        <link rel="stylesheet" type="text/javascript" href="js/bootstrap.min.js">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome1.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/w3.css">
        <link rel="stylesheet" type="text/css" href="css/w33.css">
        <link rel="stylesheet" type="text/css" href="css/Mycss.css">
        
        

        <title>Admin Page - Online Food Delivery</title>


</head>
<body>



<div class="container">

<div style="float:right;margin-top:2%;font-size:80%;">
<a href="home.php"><p class="fa fa-home" style="font-size:100%;color:grey;cursor:pointer;"> Home</p></a> | <a href="login.php"><p class="fa fa-sign-out" style="font-size:100%;color:grey;cursor:pointer;"> Admin Login</p></a> | <a href="aboutus.php"><p class="fa fa-phone" style="font-size:100%;color:grey;cursor:pointer;"> About Us & Contact Us</p></a>
</div>

<img src="images/1.png" alt="" style="max-width:10%;">
<p style="font-size:80%;margin-top:0.2%;margin-left:0%;font-family:Monotype Corsiva;">Your favorite meal, Anytime, Anywhere.</p>



</div>









<div class="header-nav" style="margin-top:-1%;">
						<nav class="navbar navbar-default">
							<div class="navbar-header navbar-left">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#page-top" style="">WELCOME <?PHP print $_SESSION["adminuser"];?></a>
							</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
								<nav>
									<ul class="nav navbar-nav">
                                    <li class="active"><a href="adminpage.php"><span>HOME</span></a></li>
                                        <li><a href="food.php"><span>MANAGING FOOD</span></a></li>
										<li><a href="orders.php"><span>CLIENT FOOD ORDERS</span></a></li>
                                        
                                        <li><a href="?sign=out" id="logout"><span>LOGOUT</span></a></li>
									</ul>	
								</nav>
							</div>
						</nav>
					</div>











<div class="fdiv">
    <div  style="background-color: rgba(0, 0, 0, 0.5);background-size: cover;height: 400px;margin-top: -1%;">




<div id="theCarousel" class="carousel slide col-md-6 col-sm-6" style="margin-top:3%;height:300px;overflow:hidden;" data-ride="carousel">
    <!-- little dots indicating the images -->
    <ol class="carousel-indicators">
        <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#theCarousel" data-slide-to="1"></li>
        <li data-target="#theCarousel" data-slide-to="2"></li>
        <li data-target="#theCarousel" data-slide-to="3"></li>
        <li data-target="#theCarousel" data-slide-to="4"></li>
        <li data-target="#theCarousel" data-slide-to="5"></li>
     
    </ol>

    <!-- text on images and the images -->

    <div class="carousel-inner">
        <div class="item active">
        <img src="images/8.jpg" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
               
               
            </div>
        </div>

        
        <div class="item">
        <img src="images/3.jpg" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
            
               
            </div>
        </div>

        <div class="item">
        <img src="images/4.jpg" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
               
               
            </div>
        </div>

        <div class="item">
        <img src="images/5.jpg" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
               
                
            </div>
        </div>

        <div class="item">
        <img src="images/2.jpg" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
               
                
            </div>
        </div>

        <div class="item">
        <img src="images/7.jpg" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
               
                
            </div>
        </div>




    </div>

     <!-- actions when arrows are clicked on -->


</div>






<div class="col-md-6 col-sm-6" style="margin-top:10%;color:white;">




WELCOME TO ADMIN PANE
<br>
Check on the menu to complete the operations.

 



       
</div>







       
</div>














    </div>



</div>

</center>
</div>


<?php require 'footer.php'; ?>


<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script> 
<script src="js/operations.js"></script>  

</body>
</html>

<?php

}
?>