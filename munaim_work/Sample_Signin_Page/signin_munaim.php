<?php
	/*--- Page header and User class ---*/
	include'Include/header.php'; 
	include'Library/User.php';
	Session::chkSession(); 

	/*--- Object creation and data passed to User class ---*/
	$user = new User;
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signin'])){
		$usrLogin = $user->UserLogin($_POST);
	}
?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>User Login</h2>
			</div>
			<div class="panel-body">
			<!-- User Signin Form Start -->
				<form style="max-width:600px; margin:0 auto;" action="" method="post">
				<?php
				/*--- Validation Message ---*/
					if(isset($usrLogin)){
						echo $usrLogin;
					}
				?>
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" id="email" name="email" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" name="password" class="form-control"/>
					</div>
					<button type="submit" name="signin" class="btn btn-success">Login</button>
				</form>
			<!-- User Signin Form End -->
			</div>
		</div>
<?php include'Include/footer.php'; ?>