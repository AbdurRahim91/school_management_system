
<?php
	//start session
	session_start();

	//redirect if logged in
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Login using OOP Approach</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">PHP Login using OOP Approach</h1>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
		    <div class="login-panel panel panel-primary">
		        <div class="panel-heading">
		            <h3 class="panel-title"><span class="glyphicon glyphicon-lock"></span> Login
		            </h3>
		        </div>
		    	<div class="panel-body">
				<?php
		    	if(isset($_SESSION['message'])){
		    		?>
		    			<div class="alert alert-danger text-center">
					        <?php echo $_SESSION['message']; ?>
					    </div>
		    		<?php

		    		unset($_SESSION['message']);
		    	}
		    ?>

		        	<form method="POST" action="login.php">
		            	<fieldset>
		                	<div class="form-group">
		                    	<input class="form-control" placeholder="Username" type="text" name="username" autofocus required>
		                	</div>
		                	<div class="form-group">
		                    	<input class="form-control" placeholder="Password" type="password" name="password" required>
		                	</div>
		                	<button type="submit" name="login" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-log-in"></span> Login</button>
		            	</fieldset>
		        	</form>
		    	</div>
		    </div>
		</div>
	</div>
</div>
</body>
</html>