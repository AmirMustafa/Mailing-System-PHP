<?php
include("../config/controller.php");

$obj = new Controller();

unset($_SESSION['user_name']);

header("location: mails.php");



//unset()  : Deletes a variable value

//unlink()  : Deletes a file

?>