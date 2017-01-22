<?php
	include("webconfig.php");
	class Model {
		var $RESULT = '';
		var $SQL = '';
		var $CONFIG = '';

		public function __construct () {
			$this->CONFIG = new webConfig();

			$cn = mysql_connect($this->CONFIG->hostname, $this->CONFIG->username, $this->CONFIG->password) or die("Not connected server");

			if($cn) {

				mysql_select_db($this->CONFIG->db_name, $cn) or die("Not connected DB");
			}
		}

		public function exeQuery($sql) {
					$this->SQL = $sql;
					$this->RESULT = mysql_query($this->SQL);
					return $this->RESULT;
		}



		public function getArray() {
			$array = array();
			while($row = mysql_fetch_array($this->RESULT)) {
				$array[] = $row;
			}

			return $array;
		}

		public function getAssoc() {
			$array = array();
			while($row = mysql_fetch_assoc($this->RESULT)) {
				$array[] = $row;
			}

			return $array;
		}

		public function getRow () {
			$array = array();
			while($row = mysql_fetch_row($this->RESULT)) {
				$array[] = $row;
			}

			return $array;
		}

		public function getObject() {
			$array = array();
			while($row = mysql_fetch_object($this->RESULT)) {
				$array[] = $row;
		}

			return $array;
	}
}
?>