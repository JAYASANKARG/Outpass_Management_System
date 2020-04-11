<?php
	session_start();

		unset($_SESSION['warden']);
		unset($_SESSION['student']);
		unset($_SESSION['admin']);	
		header('Location: ..');
	
?>