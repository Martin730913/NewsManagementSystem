<?php
	header("Content-Type:text/html;charset=utf-8;");
	$localtion=$_POST["localtion"];
	if(isset($localtion)){
		switch($localtion){
			case dml:
			header("Location:dml.php");
			break;
			case insert:
			header("Location:insert.html");
			break;
			
		}
	}
?>
