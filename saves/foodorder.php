<?php
include "../config/config.php";
?>

<h4 style="color:white;">FOOD ORDER REQUEST</h4>


<?php 

	
                $food_no=$_POST['food_no5'];


                $sql="SELECT * from food where food_no='$food_no'";
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


  <div class="col-md-3 col-sm-3">
     
     <img src="food images/<?php echo $food_pic ?>" id="img10" style="max-width:100%;margin-top:0%;" alt="" class="w3-round">

<div style="background:white;padding:4%;" class="w3-round">

<p style="display:none;">Food No: <label id="<?php echo $id1; ?>"><?php echo $food_no; ?></label></p>
<p style="margin-top:5%;">Food Name: <?php echo $food_name; ?></p>
<p>Food Manufactured Date: <?php echo $food_mgt_date; ?></p>
<p>Other Food Info: <?php echo $other_info; ?></p>
</div>

  </div>

    <form action="saves/send_request.php" method="post" enctype="multipart/form-data">
    
    <?php
      $sql2="SELECT count(order_no) as order_no from food_order";
      $result2=$conn->query($sql2);

      while ($row2 = $result2->fetch_assoc()) {
          $lstnbr=$row2['order_no'];
          $newnbr=$lstnbr+1;
      ?>
      
      <?php } ?>


      <div class="col-md-9 col-sm-9">    

	<input style="width:100%;margin-top:2%;display:none;" class="form-control w3-center" type="text" value="<?php echo $newnbr ?>" placeholder="Order No" name="order_no" id="order_no" required="true">

	<input style="width:100%;margin-top:2%;display:none;" class="form-control w3-center" type="text" value="<?php echo $food_no ?>" placeholder="Food No" name="food_no" id="food_no" required="true">

<input style="width:100%;margin-top:2%;" class="form-control w3-center" type="text" placeholder="Your Names" name="customer_name" id="customer_name" required="true" onkeypress="return isAlphaKey(event)">
<br>
<input style="width:100%;margin-top:2%;" class="form-control w3-center" type="text" placeholder="Your Address" name="customer_address" id="customer_address" required="true">
<br>
<input style="width:100%;margin-top:2%;" class="form-control w3-center" type="text" placeholder="Your Phone Number" name="customer_phone_no" id="customer_phone_no" required="true" maxlength="13" minlength="10" onkeypress="return isNumberKey(event)">
<br>
<label for="">Bankslip (Half the food payment first.)</label>
<input style="width:100%;margin-top:2%;" class="form-control w3-center" type="file" placeholder="Bankslip" name="bankslip" id="bankslip" required="true">
<br>
<textarea style="width:100%;margin-top:2%;" class="form-control w3-center" type="text" placeholder="Other Info described on your delivery" name="other_info" id="other_info" required="true"></textarea>
<br>

<input type="submit" class="btn btn-info btn-md" value="Send Request" name="send_request">
<br>
<br>

</div>
</form>

<?php

                }

?>

<br><br><br><br>


</div>