<?php
   session_start();
   $username=$_SESSION['username'];
   

   if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: logout.php');
  }
  if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: logout.php");
  }

   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "assets/css/custom_style.css">  
    <title>Home Page</title>
</head>
<body>

<div id = "login">  
        <h1 class='text-center'>This is Dashboard</h1>
        <h2>
           Welcome ...<?php echo $username;?>
        </h2>
        
    
        <form action="" method="POST">
            <button type="submit" class="btn" name="logout">Logout</button>
        </form>
    </div> 

    
    
</body>
</html>