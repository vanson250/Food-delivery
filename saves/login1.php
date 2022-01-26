
<?php
include "../config/config.php";
?>

<?php

session_start();

if(isset($_POST['username1'])){

    $username=$_POST['username1'];
    $password=$_POST['password1'];

    if(empty($username) || empty($password)){
        echo '<p style="color:white;">Please fill all required info...<p>';
    }else{

    $query=$conn->query("SELECT username from admin_user where username='$username' and password='$password'");
    if($query->num_rows === 1){
        $_SESSION['adminuser']=$username;
        echo "<p style='color:green;'>Please wait...</p>";
        echo "<script>location.href='adminpage.php'</script>";
       
    }else{
        echo "<p style='color:white;'>Incorrect Username or Password ...</p>";
    }

}
}


?>