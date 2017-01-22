<?php

class webConfig {
	var $hostname = 'localhost';
	var $username = 'root';
	var $password = '123456';
	var $db_name = 'contact';

	public function __construct() {
		session_start();
		ob_start();

		$url = $_SERVER['HTTP_HOST']."/email4/";
		$docu_root = $_SERVER['DOCUMENT_ROOT']."/email4/admin";

		define("SITE_URL", $url);
		define("IMAGE_URL", "images");
		define("UPLOAD_URL", $docu_root."/img/");
		define("JS_URL", $url."/js/");
		define("CSS_URL", $url."/css/");

		define("GALLERY_IMAGE", "http://".SITE_URL.'admin/img/');
	}
}

?>