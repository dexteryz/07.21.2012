<?php
require_once('function.php');
$test = DB::queryFirstRow("SELECT * from users WHERE username = %s", $_POST['username']);
if($test) {
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['id'] = $test['id'];
	$_SESSION['realname'] = $test['realname'];
	header("Location: http://www.studyfeed.com/projectwing/listings.php"); 

	echo "signed in.";
	}
else {
	echo "invalid password.";
	}
	