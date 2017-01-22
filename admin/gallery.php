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
							<br><br><center><h2>Gallery</h2></center>
							<div id="gallery_img">
								<div id="gallery_row">
									<div id="a1">
										<img class="img" src="assets/images/1.jpg">
										<span style="float:right; margin-right: 2%; margin-top: 2%;"><a href="#"><img src="assets/images/delete.png"></a></span>
									</div>

									<div id="a2">
										<img class="img" src="assets/images/2.jpg">
										<span style="float:right; margin-right: 2%; margin-top: 2%;"><a href="#"><img src="assets/images/delete.png"></a></span>
									</div>

									<div id="a3">
										<img class="img" src="assets/images/3.jpg">
										<span style="float:right; margin-right: 2%; margin-top: 2%;"><a href="#"><img src="assets/images/delete.png"></a></span>
									</div>
								</div>

								<div id="gallery_row">
									<div id="a1">
										<img class="img" src="assets/images/4.jpg">
										<span style="float:right; margin-right: 2%; margin-top: 2%;"><a href="#"><img src="assets/images/delete.png"></a></span>	
									</div>

									<div id="a2">
										<img class="img" src="assets/images/5.jpg">
										<span style="float:right; margin-right: 2%; margin-top: 2%;"><a href="#"><img src="assets/images/delete.png"></a></span>
									</div>

									<div id="a3">
										<img class="img" src="assets/images/6.jpg">
										<span style="float:right; margin-right: 2%; margin-top: 2%;"><a href="#"><img src="assets/images/delete.png"></a></span>
									</div>
								</div>
								<div id="gallery_row">
									<div id="a1">
										<img class="img" src="assets/images/7.jpg">
										<span style="float:right; margin-right: 2%; margin-top: 2%;"><a href="#"><img src="assets/images/delete.png"></a></span>
									</div>

									<div id="a2">
										<img class="img" src="assets/images/8.jpg">
										<span style="float:right; margin-right: 2%; margin-top: 2%;"><a href="#"><img src="assets/images/delete.png"></a></span>
									</div>

									<div id="a3">
										<img class="img" src="assets/images/9.jpg">
										<span style="float:right; margin-right: 2%; margin-top: 2%;"><a href="#"><img src="assets/images/delete.png"></a></span>
									</div>
								</div>
								<button id="btn1" class="btn btn-default">Add Images</button>

							</div>
						</div>
					</div>
		</body>
		</html>

