<?php
include "../config/config.php";
?>

<?php 



            //saving an admin user

            if(empty($_POST['food_name2']) || empty($_POST['food_mgt_date2']) || empty($_POST['other_info2'])){
                echo '<p style="color:red;">Please fill required info...<p>';
            }else{

                $sql3="SELECT date(now()) as time1";
                $result3=$conn->query($sql3);

                while ($row3 = $result3->fetch_assoc()) {
                    $datetime1=$row3['time1'];
                }


                if($_POST['food_mgt_date2'] > $datetime1){
                    echo '<p style="color:white;">Invalid manufactured date<p>';
                }else{


                if(empty($_FILES['food_pic2']['name'])){
                    
                    

                    $food_no=$_POST['food_no2'];
                    $food_name=$_POST['food_name2'];
                    $food_mgt_date=$_POST['food_mgt_date2'];
                    $other_info=$_POST['other_info2'];
           

        

                

                    

                        $sql="UPDATE food set food_name='$food_name',food_mgt_date='$food_mgt_date',other_info='$other_info' where food_no like '$food_no'";
                        if ($conn->query($sql)===TRUE) {
                            echo "<p style='color:white;'>Food Updated. Refresh to View actual records.<p>";
                            }else{
                                echo "<p style='color:white;'>Something went wrong. Please try again and Refresh.<p>";
                            }
                
            
                        



                }else{  
	
                    $food_no=$_POST['food_no2'];
                    $food_name=$_POST['food_name2'];
                    $food_pic=$_FILES['food_pic2'];
    
    
        $file_name = $_FILES['food_pic2']['name'];    
        $file_location = $_FILES['food_pic2']['tmp_name'];
        $new_file_name = "$file_name";
    
        $food_mgt_date=$_POST['food_mgt_date2'];
        $other_info=$_POST['other_info2'];
           





            $insert_query="INSERT INTO dcount(`status`)
            VALUE('Done')";
            
            if($conn->query($insert_query)===TRUE){
        
                    $pid = $conn->insert_id;
                    $new_file_name = "$pid.jpg";
}

            
    

    if(move_uploaded_file($file_location, "../food images/" . $new_file_name)){

        $path_info = pathinfo("../child images/" . $new_file_name);

        //file extension
        $fileExtension = $path_info['extension'];

                    

        $sql="UPDATE food set food_name='$food_name',food_mgt_date='$food_mgt_date',food_pic='$new_file_name',other_info='$other_info' where food_no like '$food_no'";
        if ($conn->query($sql)===TRUE) {
            echo "<p style='color:white;'>Child Updated. Refresh to View actual records.<p>";
            }else{
                                echo "<p style='color:red;'>Something went wrong. Please try again and try to rename the picture you was uploading. And try to refresh the page.<p>";
                            }

                        }else{
                            echo "<p style='color:white;'>Something went wrong. And try to refresh the page.<p>";
                        }
                
            }
        }
    
                
    }
            
                        
                    


?>