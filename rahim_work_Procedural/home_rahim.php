<?php
   include("config.php");
   session_start();
   $user_id=$_SESSION['user_id'];
   

   if (!isset($_SESSION['user_id'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login_rahim.php');
  }
  if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['user_id']);
    header("location: login_rahim.php");
  }

   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    Welcome ...<?php echo $user_id;?>
    
    <form action="" method="POST">
        <button type="submit" class="btn" name="logout">Logout</button>
    </form>
    
    
</body>
</html>