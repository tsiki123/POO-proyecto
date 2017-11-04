<?php
	session_start();
	session_destroy();
	header("Location:http://localhost/POO-proyecto/index.php");
?>