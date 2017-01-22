<?php
	include("../config/controller.php");
	$obj = new Controller();

	$mail_delete = isset($_GET['id'])?$_GET['id']:'';			//we have added query binding in 															delete icon in mail.php line 84 (we 												have received data from url, therefore GET is used)
	/*print_r($mail_delete);
	die();*/

	$del_mail = $obj->deleteMails($mail_delete);

	if($del_mail) {
		header("location: mails.php");
	}


?>