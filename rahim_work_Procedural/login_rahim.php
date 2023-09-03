<?php 
// Turn off error reporting
error_reporting(0); session_start(); $error=$_SESSION['error_msg'];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "assets/css/custom_style.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Login_page</title>
</head>
<body>
<div id = "login">  
        <h1 class='text-center'>Login</h1>  
        <form action = "auth.php" method = "POST">  
            <p>  
                <label> User ID: </label> <br> 
                <input type = "text" name  = "user_id" placeholder="Enter Your ID" required/>  
            </p>  
            <p>  
                <label> Password: </label>  <br> 
                <input type = "password" name  = "password" placeholder="Enter Your Password" required/>  
            </p>  
            <p style = "font-size:11px; color:#cc0000; margin-top:10px">
                    <?php echo $error; ?>
            </p> 
            <p>     
                <input type = "submit" name="submit" value = "Login" />  
            </p> 
            
        </form>  
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
</body>
</html>
