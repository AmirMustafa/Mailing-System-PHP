<?php
	include("../config/controller.php");

	$obj = new Controller();
	

	$btnsubmit = isset($_POST['btnsubmit']) ? $_POST['btnsubmit'] : '';
	if($btnsubmit != '') {
		$uname = isset($_POST['txt'])?$_POST['txt']:'';
		$password = isset($_POST['password'])?$_POST['password']:'';

		$r = $obj->login($uname, $password);

		// print_r($r);

		if($r == 'false') {
			echo "<b style='color:white;'>Please enter Valid Username or Password !!</b>";
		}
		else {
			header("location: mails.php");
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" type="image/png" href="assets/images/favicon.png"/>
</head>
<body>
	<div id="maindiv">
		<form method="post">
		<h2>Login Page</h2>

			<div class="form-group">
				<label for="uname">Username</label>
				<input type="text" name="txt" class="form-control" id="uname" placeholder="Enter your username ( Example johndoe123)">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" id="login" placeholder="Enter password here">
			</div>
			<div class="form-group">
				<input type="submit" name="btnsubmit" class="btn btn-primary" value="Login" />
			</div>

		</form>
	</div> 
</body>
</html>
?>
