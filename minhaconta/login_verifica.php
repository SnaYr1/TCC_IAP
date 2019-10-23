<?php

session_start();
	if (!isset($_SESSION["name"]))
	{
		session_start();
		unset($_SESSION);
		session_destroy();
		session_regenerate_id();
		
		header("location: minhaconta.php");
	}

?>