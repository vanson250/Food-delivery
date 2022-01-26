<?php
include "../config/config.php";
?>

<h4 style="color:white;">FOOD UPDATING...</h4>


<?php 

	
                $food_no=$_POST['food_no1'];


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




        
        <center>
      <h4 style="color:white;">Food No <span id="food_no2" name="food_no2"><?php echo $food_no; ?></span></h4><br>
      </center>







<div class="input-group input-group-sm" style="">
<span class="input-group-addon">Food Name</span>
<input type="text" class="form-control w3-center" placeholder="Food Name" name="food_name2" id="food_name2" value="<?php echo $food_name; ?>">
</div>
<br>

<div class="input-group input-group-sm" style="">
<span class="input-group-addon">Food Picture</span>
<input type="file" class="form-control w3-center" placeholder="Food Picture" name="food_pic2" id="food_pic2">
</div>
<br>

<div class="input-group input-group-sm" style="">
<span class="input-group-addon">Food Manufactured Date</span>
<input type="date" class="form-control w3-center" placeholder="Food Manufactured Date" name="food_mgt_date2" id="food_mgt_date2" value="<?php echo $food_mgt_date; ?>">
</div>
<br>

<div class="input-group input-group-sm" style="">
<span class="input-group-addon">Other Info</span>
<input type="text" class="form-control w3-center" placeholder="Other Info" name="other_info2" id="other_info2" value="<?php echo $other_info; ?>">
</div>

<p id="foodmsg4" style="font-family: Franklin Gothic Book;"></p>
<br>
<input type="submit" class="btn btn-info btn-sm" value="Update" onclick="return false" onmousedown="update_food();"> - <input type="submit" class="btn btn-info btn-xs" value="Refresh" onclick="return false" onmousedown="location.reload();">

<?php

                }

?>

<br><br><br><br>


</div>