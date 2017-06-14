<!DOCTYPE html>
<html>
<head>
	<title>Smart Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-sm-offset-2 col-md-offset-4 col-md-4 col-md-offset-4">
			<h1>Smart Home</h1>
			<form action="index.php" method="GET">
				<input type="button" class="btn" id="lamp" name="lamp" value="Off" style="background-color: #ff4949;">
			</form>
		</div>
	</div>
</div>
<?php
$lamp_status = false;

if(isset($_GET['lamp']))
{
	if($lamp_status)
	{
		shell_exec("sudo python");
		$lamp_status = true;
	}
	else
	{
		shell_exec("sudo python");
		$lamp_status = false;
	}
}
?>
<script type="text/javascript" src="js/effect.js"></script>
</body>
</html>