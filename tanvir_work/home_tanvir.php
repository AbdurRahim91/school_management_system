<?php
require 'function.php';

$select = new Select();

if(isset($_SESSION["id"])){
    $user = $select->selectUserById($_SESSION["id"]);
}
else{
    header("Location: login_tanvir.php");
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
    <title>Home</title>
</head>
<body class="text-center wrapper">
    <h1>Welcome <?= $user["name"] ?></h1>
    <a href="logout.php">Logout</a>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>