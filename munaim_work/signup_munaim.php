<?php
	/*--- Page header and User class ---*/
	include'Include/header.php'; 
	include'Library/User.php'; 

	/*--- Object creation and data passed to User class ---*/
	$user = new User;
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])){
		$usrRegi = $user->UserRegistration($_POST);
	}
?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>User Registration</h2>
			</div>
			<div class="panel-body">
			<!-- User Registration Form Start -->
				<form style="max-width:600px; margin:0 auto;" action="" method="POST">
				<?php
				/*--- Validation Message ---*/
					if(isset($usrRegi)){
						echo $usrRegi;
					}
				?>
					<div class="form-group">
						<label for="firstName">First Name</label>
						<input type="text" id="firstName" name="firstName" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label for="lastName">Last Name</label>
						<input type="text" id="lastName" name="lastName" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" id="email" name="email" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" name="password" class="form-control"/>
					</div>
					<button type="submit" name="signup" class="btn btn-success">Submit</button>
				</form>
			<!-- User Registration Form End -->
			</div>
		</div>
<?php include'Include/footer.php'; ?>