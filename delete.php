<?php
	header("Content-Type:text/html;charset=utf-8;");
	$opration=$_POST["opration"];
	$mysqli=new MySQLi("localhost","root","root","php212");
	if(isset($opration)){
		$sql="delete from news where id = '".$opration."'";
		$mysqli->query($sql);
	}
	if($mysqli->affected_rows>0){
		header("Location:dml.php");
	}
?>