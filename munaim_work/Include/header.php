<?php
include_once'./Library/Session.php';
Session::init();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Register System PHP</title>
	<link rel="stylesheet" href="Include/bootstrap3.3.7.min.css"/>
</head>
<body>
	<?php
		if(isset($_GET['action']) && $_GET['action'] == "logout"){
			Session::destroy();
		}
	?>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">School Management System</a>
				</div>
				<ul class="nav navbar-nav pull-right">
				<?php
				$id = Session::get("id");
				$userlogin = Session::get("login");
				
				if($userlogin == true){ ?>
					<li><a href="index_munaim.php">Home</a></li>
					<li><a href="?action=logout">Logout</a></li>
				<?php } else{ ?>
					<li><a href="signup_munaim.php">Register</a></li>
					<li><a href="signin_munaim.php">Login</a></li>
				<?php } ?>
				</ul>
			</div>
		</nav>