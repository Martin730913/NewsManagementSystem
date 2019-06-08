<?php
	header("Content-Type:text/html;charset=utf-8;");
	$mysqli=new MySQLi("localhost","root","root","php212");
	if($mysqli->connect_error){
		die("连接失败".$mysqli->connect_error);
	}
	$res=$mysqli->query($sql);
?>