<?php
	include("model.php");

	class Controller {
		var $DB = '';
		var $Message = '';

		function __construct() {
			$this->DB = new Model();
			
		}

		function login($e,$p) {					//can be any variable $e for email, $p for password
			/*print_r($sql);
			die();*/

			$flag = '';
			$sql = "SELECT * FROM admin WHERE uname = '".$e."' AND password = '".$p."'";

			/*print_r($sql);
			die();*/

			if($this->DB->exeQuery($sql)) {
				$rs = $this->DB->getObject();

				/*echo "<pre>";
				print_r($rs);
				die();*/

				if(count($rs) == 1) {
					$_SESSION['user_name'] = isset($rs[0]->uname)?$rs[0]->uname:'';
					$_SESSION['user_password'] = isset($rs[0]->password)?$rs[0]->password:'';
					/*print_r($_SESSION['user_name']);*/
					$flag = 1;
				}
				else {
					$flag = 0;
				}
			}

			if($flag == 0) {
				return 'false';
			}
			else {
				return 'true';
			}
		}

		function authenticate() {
			
			$session_name = isset($_SESSION['user_name'])?$_SESSION['user_name']:'';
			/*print_r($session_name);
			die();*/

			if($session_name == '') {
				header("location: index.php");
			}
			
		}

		

		function getAllMails() {
			$sql = "SELECT * FROM mail ORDER BY id DESC";
			/*print_r($sql);
			die;*/

			if($this->DB->exeQuery($sql)) {
				$rs = $this->DB->getObject();

				/*echo "<pre>";
				print_r($rs);
				die();*/
				return $rs;
			}

		}

		function contactInsert($name, $email, $mobile, $message) {
			$sql = "INSERT INTO mail (name, email, mobile, message) VALUES('$name', '$email', '$mobile', '$message')";

			/*$sql = "INSERT INTO mail SET name='".$name."', email='".$email."', mobile='".$mobile."', message='".$message."'";*/
			/*print_r($sql);
			die;*/

			$insert = $this->DB->exeQuery($sql);
			return 'true';
		}

		function deleteMails($mail_delete) {
			if($mail_delete != '') {
				$sql = "DELETE FROM mail WHERE id = '".$mail_delete."'";
				/*print_r($sql);
				die;*/

				if($this->DB->exeQuery($sql)) {
					return 'true';
				}
			}
		}

		function viewMail($view_id) {
			/*print_r($view_id);
			die();*/

			if($view_id != '') {
				$sql = "SELECT * FROM mail WHERE id='".$view_id."'";
					/*echo "<pre>";
					print_r($sql);
					die();*/
				if($this->DB->exeQuery($sql)) {
					$rs = $this->DB->getObject();

					/*echo "<pre>";
					print_r($rs);
					die();*/

					return $rs;
				}
			}
		}



	}
?>