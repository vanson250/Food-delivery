<!DOCTYPE html>
<html>
<head>
<style>

.onep{
    padding:1%;
    width:100%;
    cursor:pointer;
}

.onep:hover{
    background-color:lightblue;
}
</style>
</head>
<body>
    


<?php
include "../config/config.php";

?>

<?php

$search1=$_POST['search1'];


$sql="SELECT * from food where food_name like '%$search1%'";
$result=$conn->query($sql);

$a=1;

while ($row = $result->fetch_assoc()) {
 $food_no=$row['food_no'];
 $food_name=$row['food_name'];


 $id1="Mine".$a;
 $id2="Mine1".$a;

?>

<p id="<?php echo $id1 ?>" style="display:none;"><?php echo $food_name; ?></p>
<p class="onep" onclick="view_s_food('<?php echo $id1 ?>');"><?php echo $food_name; ?></p>

<?php







 $a++;


} 


?>






</body>
</html>

