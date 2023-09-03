<?php
	include'Include/header.php';
?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>User Registration</h2>
			</div>
			<div class="panel-body">
				<form style="max-width:600px; margin:0 auto;" action="" method="post">
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
			</div>
		</div>
<?php include'Include/footer.php'; ?>