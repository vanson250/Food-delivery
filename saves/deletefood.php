<?php
include "../config/config.php";
?>

<?php 

         
          
	
                $food_no=$_POST['food_no3'];
            

                        $sql="delete from food where food_no like '$food_no'";
                        if ($conn->query($sql)===TRUE) {
                            echo "<p style='color:white;'>Record deleted. Please click on refresh to dismiss the record.</p>";
                            }else{
                                echo "<p style='color:red;'>That food was assigned to some order or delivery record details. Deal with those details first.</p>";
                            }
                 
    
            
                        
                    


?>