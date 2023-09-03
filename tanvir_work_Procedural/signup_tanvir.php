<?php
require 'function.php';

if(isset($_SESSION["id"])){
  header("Location: home_tanvir.php");
}

$register = new Register();

if(isset($_POST["submit"])){
  $result = $register->registration($_POST["name"], $_POST["user_name"], $_POST["email"], $_POST["password"],  $_POST["confirmpassword"]);

  if($result == 1){
    echo
    "<script> alert('Registration Sucessful'); </script>";
  }
  if($result == 10){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  if($result == 100){
    echo
    "<script> alert('Password Does Not Match'); </script>";
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
        <h2 class="text-center pt-3">Signup now</h2>
        <p class="text-center text-muted lead">It's Free and Takes a Minute</p>
        <!-- From start -->
        <form action="" method="post" autocomplete="off">

          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
            <input type="text" name="name" required value="" class="form-control" placeholder="First Name">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
            <input type="text" name="user_name" required value=""  class="form-control" placeholder="User Name">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
            <input type="email"  name="email" required value="" class="form-control" placeholder="Email">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
            <input type="password" name="password" required value="" class="form-control" placeholder="Password">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
            <input type="password" name="confirmpassword" required value="" class="form-control" placeholder="Confirm Password">
          </div>
          <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-success">Signup Now</button>
          </div>
          <p class="text-center text-muted mt-2">When You Register by Clicking Signup Button, You Agree to our <a href="#">Terms and Condition</a> and <a href="#">Privacy Policy</a></p>
          <p class="text-center">
            Already Have an Account ? <a href="login_tanvir.php">Login Here</a>
          </p>
        </form>
        <!-- From end -->
      </div>

    </div>
  </div>
  
    
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
