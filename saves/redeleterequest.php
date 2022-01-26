<?php
include "../config/config.php";
?>

<?php 

                   

            $order_no=$_POST['order_no'];
           
               

                        $sql2="UPDATE food_order set status='Not Approved' where order_no like '$order_no'";
                        if ($conn->query($sql2)===TRUE) {

                                echo "<p style='color:red;'>Something went wrong. Please try again and Refresh.<p>";

                            }else{
                                echo "<p style='color:red;'>Something went wrong. Please try again and Refresh.<p>";
                            }



?>