<?php
include "config/config.php";

?> 


 <?php 

$sql="SELECT * from food order by food_no desc limit 10";
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

  ?>


  <div style="padding:2%;width:25%;float:left;">
     
     <img src="food images/<?php echo $food_pic ?>" id="img10" style="max-width:100%;margin-top:2%;" alt="" class="w3-round">

    <div class="">

    <div style="background:white;padding:4%;" class="w3-round">

    <p style="display:none;">Food No: <label id="<?php echo $id1; ?>"><?php echo $food_no; ?></label></p>
    <p style="margin-top:5%;">Food Name: <?php echo $food_name; ?></p>
    <p>Manufactured Date: <?php echo $food_mgt_date; ?></p>
    <p>Food Description: <?php echo $other_info; ?></p>
    </div>
    
    
        <div style="margin-top:0%;background:white;padding:4%;" class="w3-round">
         <a href='#' onclick="foodorder('<?php echo $id1 ?>');"><button type='button' class='btn btn-warning'>ORDER NOW</button></a>
         
         </div>
         </div>
         </div>


         <?php
$a++;

} 

 ?> 