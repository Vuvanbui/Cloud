<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
	<html>
		<head>
		<title>Welcome Home</title>
		<link rel="stylesheet" href="css/style.css" />
		</head>
			<body>
				<div class="form">
					<p>This is secure area.</p>
					<p><a href="dashboard.php">Dashboard</a></p>
					<a href="logout.php">Logout</a>
				</div>
			</body>
</html>