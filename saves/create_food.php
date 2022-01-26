<?php
include "../config/config.php";

?>  


<?php 



            if(empty($_POST['food_name']) || empty($_FILES['food_pic']['name']) || empty($_POST['food_mgt_date']) || empty($_POST['other_info'])){
                echo '<p style="color:white;">Please fill required info...<p>';
            }else{

                
	
                $food_no=$_POST['food_no'];
                $food_name=$_POST['food_name'];
                $food_pic=$_FILES['food_pic'];


    $file_name = $_FILES['food_pic']['name'];    
    $file_location = $_FILES['food_pic']['tmp_name'];
    $new_file_name = "$file_name";

    $food_mgt_date=$_POST['food_mgt_date'];
    $other_info=$_POST['other_info'];
    
               
    

    




    $query=$conn->query("SELECT food_name from food where food_name='$food_name'");
            if($query->num_rows === 1){
        
            echo "<p style='color:white;'>The Food have been already recorded, Please insert another.<p>";
                }else{

$date1= date('Y-m-d');

                if($food_mgt_date > $date1){
            echo "<p style='color:white;'>Invalid Manufactured date.<p>";

                }else{
            

                            $insert_query="INSERT INTO dcount(`status`)
                            VALUE('Done')";
                            
                            if($conn->query($insert_query)===TRUE){
                        
                                    $pid = $conn->insert_id;
                                    $new_file_name = "$pid.jpg";
                }

                            
                    

                    if(move_uploaded_file($file_location, "../food images/" . $new_file_name)){

                        $path_info = pathinfo("../food images/" . $new_file_name);

                        //file extension
                        $fileExtension = $path_info['extension'];
                    


                            $sql="INSERT INTO food(`food_no`, `food_name`, `food_pic`, `food_mgt_date`, `other_info`)
                        VALUE('$food_no','$food_name','$new_file_name','$food_mgt_date','$other_info')";
                        if ($conn->query($sql)===TRUE) {
                            echo "<p style='color:green;'>Food Recorded. Please click on refresh to actualize the records.<p>";

                            }else{
                                echo "<p style='color:red;'>Something went wrong. Please try again and try to rename the picture you was uploading. And try to refresh the page.<p>";
                            }



                            }else{
                                echo "<p style='color:red;'>Something went wrong. And try to refresh the page.<p>";
                            }
                }

            
            }
        }
        
                
    
            
                        
                    


?>