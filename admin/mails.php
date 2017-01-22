<?php
	include("../config/controller.php");

	$obj = new Controller();
	$rs = $obj->authenticate();
	$all_mails = $obj->getAllMails();
	/*print_r($all_mails);*/
	

/*	$btnsubmit = isset($_POST['btnsubmit']) ? $_POST['btnsubmit'] : '';
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

	}*/

?>

<html>
		<head>
		 	<meta charset="UTF-8"> 
			<title>Dashboard</title>
			<link rel="stylesheet" type="text/css" href="style2.css ">
			<link rel="stylesheet" href="assets/css/bootstrap.css">
			<link rel="shortcut icon" type="image/png" href="assets/images/favicon.png"/>

		</head>
		<body>
			<?php include "header.php" ?>

			<div id="headbar">
		
					</div>
					<div id="body">
						<!-- <div id="left_container">
							<h3 style="margin-left:10%"><a href="dashboard.php"><img src="assets/images/dashboard.png">Dashboard</a></h3> <br>
							<h3 style="margin-left:10%"><a href="galleryup.php"><img src="assets/images/gallery.png">Gallery</a></h3><br>
							<h3 style="margin-left:10%"><a href="page.php"><img src="assets/images/page.png">Page</a></h3><br>
							<h3 style="margin-left:10%"><a href="banner.php"><img src="assets/images/banner.png">Banner</a></h3> <br>
							<h3 style="margin-left:10%"><a href="header1.php"><img src="assets/images/header1.png">Header</a></h3><br>
							<h3 style="margin-left:10%"><a href="footer1.php"><img src="assets/images/footer.png">Footer</a></h3><br>
							<h3 style="margin-left:10%"><a href="news.php"><img src="assets/images/news.png">News</a></h3><br>
							<h3 style="margin-left:10%"><a href="mails.php"><img src="assets/images/mails1.png">Mails </a></h3><br>
							
						</div> -->
						<div id="right_container">
							<br><br><center><h2>Mails</h2></center>

							<div id="mail_div">
								<table id="mail_table" class="table table-striped table-hover table-condensed ">
									<thead>
										<tr class="mail_table">
										<th class="mail_table">Name</th>
										<th class="mail_table">Email</th>
										<th class="mail_table">Contact</th>
										<th class="mail_table">Message</th>
										<th class="mail_table">Action</th>
									</tr>
									</thead>
									
									<tbody class="mail_table">
										<?php
											if(!empty($all_mails)) {
												/*echo "<pre>";
												print_r($all_mails);
												die();*/
												foreach($all_mails as $k=>$v) {
													?>

													<tr class="mail_table">
														
														<td class="mail_table"><?php echo $v->name ?></td>
														<td class="mail_table"><?php echo $v->email ?></td>
														<td class="mail_table"><?php echo $v->mobile ?></td>
														<td class="mail_table"><?php echo $v->message ?></td>
														<td class="mail_table"><a href="mail_delete.php?id=<?php echo $v->id; ?>"><img src="assets/images/delete.png"></a>
														 | 

														 <a href="view.php?id=<?php echo $v->id; ?>"><img src="assets/images/view.png"></a></td>
													</tr>
													<?php } } ?>
											
										
									</tbody>

									<!-- <tbody>
										<tr>
										<td>1</td>
										<td>Amir Mustafa</td>
										<td>amirengg15@gmail.com</td>
										<td>8170954991</td>
										<td>What is the cost of Learning PHP and its basic time period?</td>
										<td><a href="#"><img src="assets/images/delete.png"></a> | <a href="view.php"><img src="assets/images/view.png"></a></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Raj Single</td>
										<td>raj@gmail.com</td>
										<td>8170954343</td>
										<td>Facing problems with MVC!!  </td>
										<td><a href="#"><img src="assets/images/delete.png"></a> | <a href="view.php"><img src="assets/images/view.png"></a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Shivani Sinha</td>
										<td>shivani@gmail.com</td>
										<td>8170951111</td>
										<td>Need to learn hibernate? What the Live Project done here</td>
										<td><a href="#"><img src="assets/images/delete.png"></a> | <a href="view.php"><img src="assets/images/view.png"></a></td>
									</tr>
									<tr>
										<td>4</td>
										<td>Rubby Bhatiya</td>
										<td>rubby@gmail.com</td>
										<td>7441454991</td>
										<td>Need to learn hibernate? What the Live Project done here.Tell me about its price??</td>
										<td><a href="#"><img src="assets/images/delete.png"></a> | <a href="view.php"><img src="assets/images/view.png"></a></td>
									</tr>
									</tbody> -->
								</table>
							</div>
						</div>
					</div>
			</body>
		</html>