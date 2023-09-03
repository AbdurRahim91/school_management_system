<?php
   include("config.php");
   session_start();
   
   if(isset($_POST['submit'])) {
      // user_id and password sent from form 
      print_r($_POST);
      
      $user_id = mysqli_real_escape_string($db,$_POST['user_id']);
      $password= mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM student_info WHERE user_id = '$user_id' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
      $count = mysqli_num_rows($result);
      
      // If result matched $user_id and $password, table row must be 1 row
		
      if($count == 1) {

        $_SESSION['user_id']=$user_id;
         
         header("location: home_rahim.php");
      }else {
        $_SESSION['error_msg'] = "Your user ID or Password is invalid";
        header("location: login_rahim.php");
        //  echo "Your user ID or Password is invalid";
      }
   }
?>