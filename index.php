<?php
	include("config/controller.php");

	$obj = new Controller();
	
	/* ====================== For Sending in Mail : Start ========================*/

	$btnsubmit = isset($_POST['btnsubmit'])?$_POST['btnsubmit']:'';

	if(isset($_POST['btnsubmit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$message = $_POST['message'];

		$to = "amirengg15@gmail.com";
		$headers = "From : $name <$email>";
		$comment = "Name : $name \n \n Email : $email \n \n Mobile: \n \n Message : $message";
		if(true) {
			echo "Thank you for contacting us";
		}
		else {
			echo "Error ...";
		}
	}

	/* ====================== For Sending in Mail : End ========================*/


	/* ====================== For Sending in DB : Start ========================*/
	
	$btnsubmit = isset($_POST['btnsubmit'])?$_POST['btnsubmit']:'';

	if($btnsubmit != '') {
		$name = isset($_POST['name'])?$_POST['name']:'';
		$email = isset($_POST['email'])?$_POST['email']:'';
		$mobile = isset($_POST['mobile'])?$_POST['mobile']:'';
		$message = isset($_POST['message'])?$_POST['message']:'';
	

		$rs = $obj->contactInsert($name, $email, $mobile, $message);
		/*print_r($rs);
		die();*/

		if($rs == false) {
			echo "Error ..";
		}
		else {
			echo " <b>..</b>";
		}
	}
	/* ======================For Sending in DB : End =============================*/
	

?>




<!DOCTYPE html>
<html>
<head>
	<title>Mailing System</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form method="post">
	<center><h2><b>Contact Us!</b></h2></center>
		<div class="contact">
			
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control"><br>
			</div>
			<div class="form-group">
				
				<label for="email">Email</label></td>
				<input type="email" name="email" id="email" class="form-control"><br>
			
			
			</div>
			<div class="form-group">
				
				<label for="mobile">Mobile</label>
				<input type="tel" name="mobile" id="mobile" class="form-control">
			<br>
			
			</div>
			<div class="form-group">
				
				<label for="message">Message</label>
				<textarea rows="4" cols="50" name="message" id="message" class="form-control"></textarea> <br>
			
			
			</div>
			<div class="form-group">
				
				<input type="submit" name="btnsubmit" value="Send" class="btn btn-primary">
			
			</div>
		
		</div>
	</form>
</body>
</html>



		

		
		

		
		

		
		