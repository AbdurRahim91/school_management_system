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
						<label for="name">Your Name</label>
						<input type="text" id="name" name="name" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" id="username" name="username" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" id="email" name="email" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" name="password" class="form-control"/>
					</div>
					<button type="submit" name="register" class="btn btn-success">Submit</button>
				</form>
			</div>
		</div>
<?php include'Include/footer.php'; ?>