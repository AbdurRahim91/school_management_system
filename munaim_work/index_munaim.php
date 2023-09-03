<?php
	include'Include/header.php';
	include'Library/Database.php';
	Session::chkLogin();
?>
	
	<div class="panel panel-default">
		<div class="panel-body text-center">
			<h2>Welcome! <strong><?php echo Session::get('firstName')." ".Session::get('lastName'); ?></strong></h2>
		</div>
	</div>

<?php include'Include/footer.php'; ?>		