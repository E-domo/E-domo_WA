<?php
	
	session_start();
	session_unset();
	header("Location: logIn.html");
	exit();

?>