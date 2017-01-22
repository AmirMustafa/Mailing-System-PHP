<?php
include("../config/controller.php");
$obj = new Controller();
echo $rs = $obj->authenticate();

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
						<div id="left_container">
							<h3 style="margin-left:10%"><a href="dashboard.php"><img src="assets/images/dashboard.png">Dashboard</a></h3> <br>
							<h3 style="margin-left:10%"><a href="galleryup.php"><img src="assets/images/gallery.png">Gallery</a></h3><br>
							<h3 style="margin-left:10%"><a href="page.php"><img src="assets/images/page.png">Page</a></h3><br>
							<h3 style="margin-left:10%"><a href="banner.php"><img src="assets/images/banner.png">Banner</a></h3> <br>
							<h3 style="margin-left:10%"><a href="header1.php"><img src="assets/images/header1.png">Header</a></h3><br>
							<h3 style="margin-left:10%"><a href="footer1.php"><img src="assets/images/footer.png">Footer</a></h3><br>
							<h3 style="margin-left:10%"><a href="news.php"><img src="assets/images/news.png">News</a></h3><br>
							<h3 style="margin-left:10%"><a href="mails.php"><img src="assets/images/mails1.png">Mails </a></h3><br>
							
						</div>
						<div id="right_container">
							<br><br><center><h2>Page Management</h2></center>
						</div>
					</div>
		</body>
		</html>


