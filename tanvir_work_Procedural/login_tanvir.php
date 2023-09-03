<?php
require 'function.php';

if(isset($_SESSION["id"])){
  header("Location: home_tanvir.php");
}

$login = new Login();

if(isset($_POST["submit"])){
  $result = $login->login($_POST["usernameemail"], $_POST["password"]);

  if($result == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: home_tanvir.php");
  }
  elseif($result == 10){
    echo
    "<script> alert('Wrong Password'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>signup</title>
</head>
<body class="bg-light">
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
        <h2 class="text-center pt-3">Login now</h2>
        <p class="text-center text-muted lead">It's Free and Takes a Minute</p>
        <!-- From start -->
        <form action="" method="post" class="py-3" autocomplete="off">
          
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
            <input type="text" name="usernameemail" required value=""  class="form-control" placeholder="User Name or Email">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
            <input type="password"  name="password" required value="" class="form-control" placeholder="Password">
          </div>
          
          <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-success">Login Now</button>
          </div>
          
          <p class="text-center mt-3">
            Register Now for Free by clicking <a href="signup_tanvir.php">Register Now</a>
          </p>
        </form>
        <!-- From end -->
      </div>

    </div>
  </div>
  
    
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
