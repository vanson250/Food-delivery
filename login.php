<!DOCTYPE html>
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
        
        

        <title>Admin Login - Online Food Delivery</title>


</head>
<body>



<div class="container">

<div style="float:right;margin-top:2%;font-size:80%;">
<a href="home.php"><p class="fa fa-home" style="font-size:100%;color:grey;cursor:pointer;"> Home</p></a> | <a href="login.php"><p class="fa fa-sign-out" style="font-size:100%;color:grey;cursor:pointer;"> Admin Login</p></a> | <a href="aboutus.php"><p class="fa fa-phone" style="font-size:100%;color:grey;cursor:pointer;"> About Us & Contact Us</p></a>
</div>

<img src="images/1.png" alt="" style="max-width:10%;">
<p style="font-size:80%;margin-top:0.2%;margin-left:0%;font-family:Monotype Corsiva;">Your favorite meal, Anytime, Anywhere.</p>



</div>

<div class="fdiv">
<center>
<p style="font-size:250%;font-weight:bold;color:white;text-shadow: 1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Admin Login ...</p>

<div style="background-color: rgba(0, 0, 0, 0.5);max-width:50%;padding:2%;">

<form action="" id="wrapper" method="post">
                        
    
                        <p style="text-align:center;margin-top:2%;color:white;">
                            Log in to continue to your<br />
                            ADMIN Account.
                            
                        </p>
                            <input style="width:100%;margin-top:2%;" class="form-control w3-center" type="text" placeholder="Username" name="username1" id="username1" required="true">
                            <br>
                            <input style="width:100%;" class="form-control w3-center" type="password" placeholder="Password" required="true" name="password1" id="password1">            
                            <br>
                            <p id="msg1" class="w3-center" style="font-family: Franklin Gothic Book;"></p>

                            <input type="submit" style="" class="btn btn-info btn-md" value="Log in" onclick="return false" onmousedown="login2();">
                            <br>
                            <br>
                        <a  href="#" data-toggle="modal" data-target="#myModal1" style="color:white;">Forgot password?</a>
                        </form>


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