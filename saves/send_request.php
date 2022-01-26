<?php
include "../config/config.php";

?>  


<?php 


if(isset($_POST['send_request'])){




                
	
                $order_no=$_POST['order_no'];
                $customer_name=$_POST['customer_name'];
                $customer_address=$_POST['customer_address'];
                $customer_phone_no=$_POST['customer_phone_no'];
                $food_no=$_POST['food_no'];
                $other_info=$_POST['other_info'];

                $bankslip=$_FILES['bankslip'];


                $file_name = $_FILES['bankslip']['name'];    
                $file_location = $_FILES['bankslip']['tmp_name'];
                $new_file_name = "$file_name";


                $insert_query="INSERT INTO dcount(`status`)
                VALUE('Done')";
                
                if($conn->query($insert_query)===TRUE){
            
                        $pid = $conn->insert_id;
                        $new_file_name = "$pid.jpg";
    }

                
        

        if(move_uploaded_file($file_location, "../bankslip images/" . $new_file_name)){

            $path_info = pathinfo("../bankslip images/" . $new_file_name);

            //file extension
            $fileExtension = $path_info['extension'];
       
    

 


                            $sql="INSERT INTO food_order(`order_no`, `customer_name`, `customer_address`, `customer_phone_no`, `bankslip`, `food_no`, `other_info`, `order_date`, `status`)
                        VALUE('$order_no','$customer_name','$customer_address','$customer_phone_no','$new_file_name','$food_no','$other_info',now(),'Not Approved')";
                        if ($conn->query($sql)===TRUE) {
                            echo "<script>alert('Your request have been sent. Please wait for your delivery according to submitted details.')</script>";
                            echo "<script>location.href='../home.php'</script>";

                            }else{
                                echo "<script>alert('Something Went Wrong. Please try again')</script>";
                                echo "<script>location.href='../home.php'</script>";
                            }



                            }else{
                                echo "<script>alert('Something Went Wrong. Please try again')</script>";
                                echo "<script>location.href='../home.php'</script>";
                            }
                        }
                
            



?>