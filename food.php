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
        
        

        <title>Food Manage - Online Food Delivery</title>


          <style>

#Search {
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}

#Tb1 {
    border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
}

#Tb1 th, #Tb1 td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
}

#Tb1 tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd; 
}

#Tb1 tr.header, #Tb1 tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}

.onep{
    cursor:pointer;
}

</style>



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
                                    <li><a href="adminpage.php"><span>HOME</span></a></li>
                                        <li class="active"><a href="food.php"><span>MANAGING FOOD</span></a></li>
										<li><a href="orders.php"><span>CLIENT FOOD ORDERS</span></a></li>
                                        
                                        <li><a href="?sign=out" id="logout"><span>LOGOUT</span></a></li>
									</ul>	
								</nav>
							</div>
						</nav>
					</div>











<div class="fdiv" style="height:500px;">
    <div  style="background-color: orange;background-size: cover;height: 500px;margin-top: -1%;overflow:auto;padding:2% 10% 2% 10%">


















<div class="" style="">

 <h4 style="color:white;">LIST OF FOOD AVAILABLE</h4>

<p id="foodmsg3" style="font-family: Franklin Gothic Book;"></p>


<div style="height:320px;overflow:auto;">


<input type="text" id="Search" onkeyup="mySearchFunction1()" placeholder="Search for Food Names..." title="Type in a Food Name">

<form method="POST" action="">
<table class="table table-hover" id="Tb1" style="color:black;font-size:14px;">
<thead>
<tr class="header">
 
 <th>Food No</th>
 <th>Food Name</th>
 <th>Food Pic</th>
 <th>Food MGT Date</th>
 <th>Other Info</th>
 
 <th>Edit</th>
 <th>Delete</th>

</tr>
</thead>
<tbody>
<?php 

$sql="SELECT * from food";
$result=$conn->query($sql);

$a=1;

while ($row = $result->fetch_assoc()) {
 $food_no=$row['food_no'];
 $food_name=$row['food_name'];
 $food_pic=$row['food_pic'];
 $food_mgt_date=$row['food_mgt_date'];
 $other_info=$row['other_info'];

 $id1="Mine".$a;
 $id2="Mine1".$a;
 
 
 


 echo "<tr>";
 


 echo "<td id='$id1'>". $row['food_no']."</td>";
 echo "<td>". $row['food_name']."</td>";
 echo "<td>";
 ?>
 <img src="food images/<?php echo $row['food_pic']; ?>  " alt="Picture" style="max-width:100%;" class="w3-round" />
 <?php
 echo "</td>";
 echo "<td>". $row['food_mgt_date']."</td>";
 echo "<td>". $row['other_info']."</td>";


 

 
 
 echo "<td>";
     ?>
     <a href='#' onclick="foodupdate('<?php echo $id1 ?>');"><button type='button' class='btn btn-warning'><span class='glyphicon glyphicon-edit'></span></button></a>
     <?php
     echo "</td>";
     echo "<td>";
     ?>
     <a href='#' onclick="fooddelete('<?php echo $id1 ?>','foodmsg3');"><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></button></a>
     <?php

echo "</td>";
echo "</tr>";

$a++;


} 

?> 
</tbody>
</table>
</form>







<div id="printableArea" style="display:none;">

<form method="POST" action="">
<table class="table table-hover" id="Tb1" style="color:black;font-size:14px;">
<thead>
<tr class="header">
 
 <th>Food No</th>
 <th>Food Name</th>
 <th>Food Pic</th>
 <th>Food MGT Date</th>
 <th>Other Info</th>
 
</tr>
</thead>
<tbody>
<?php 

$sql="SELECT * from food";
$result=$conn->query($sql);

$a=1;

while ($row = $result->fetch_assoc()) {
 $food_no=$row['food_no'];
 $food_name=$row['food_name'];
 $food_pic=$row['food_pic'];
 $food_mgt_date=$row['food_mgt_date'];
 $other_info=$row['other_info'];

 $id1="Mine".$a;
 $id2="Mine1".$a;
 
 
 


 echo "<tr>";
 


 echo "<td id='$id1'>". $row['food_no']."</td>";
 echo "<td>". $row['food_name']."</td>";
 echo "<td>";
 ?>
 <img src="food images/<?php echo $row['food_pic']; ?>  " alt="Picture" style="max-width:100%;" class="w3-round" />
 <?php
 echo "</td>";
 echo "<td>". $row['food_mgt_date']."</td>";
 echo "<td>". $row['other_info']."</td>";



echo "</tr>";

$a++;


} 

?> 
</tbody>
</table>
</form>


</div>








</div>


<input type="submit" style="" class="btn btn-default btn-sm" value="Print" onclick="printDiv('printableArea')">


</div>






<br><br><br>







<div class="" style="" id="fooddiv1">

<h4 style="color:white;">REGISTER A NEW FOOD</h4>



<?php
      $sql2="SELECT count(food_no) as food_no from food";
      $result2=$conn->query($sql2);

      while ($row2 = $result2->fetch_assoc()) {
          $lstnbr=$row2['food_no'];
          $newnbr=$lstnbr+1;
      ?>
      
      <?php } ?>
<center>
      <h4 style="color:white;">Food No <span id="food_no" name="food_no"><?php echo $newnbr; ?></span></h4><br>
      </center>

<div class="input-group input-group-sm" style="">
<span class="input-group-addon">Food Name</span>
<input type="text" class="form-control w3-center" placeholder="Food Name" name="food_name" id="food_name">
</div>
<br>

<div class="input-group input-group-sm" style="">
<span class="input-group-addon">Food Picture</span>
<input type="file" class="form-control w3-center" placeholder="Food Picture" name="food_pic" id="food_pic">
</div>
<br>

<div class="input-group input-group-sm" style="">
<span class="input-group-addon">Food Manufactured Date</span>
<input type="date" class="form-control w3-center" placeholder="Food Manufactured Date" name="food_mgt_date" id="food_mgt_date">
</div>
<br>

<div class="input-group input-group-sm" style="">
<span class="input-group-addon">Other Info</span>
<input type="text" class="form-control w3-center" placeholder="Other Info" name="other_info" id="other_info">
</div>
<br>
     


<p id="foodmsg1" style="font-family: Franklin Gothic Book;"></p>
<input type="submit" style="" class="btn btn-default btn-sm" value="Record New" onclick="return false" onmousedown="create_food();"> - <input type="submit" style="" class="btn btn-default btn-sm" value="Refresh" onclick="return false" onmousedown="location.reload();">


<br><br><br><br>
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