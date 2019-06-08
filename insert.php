<?php
	//插入新闻
	header("Content-Type:text/html;charset=utf-8;");
	$title=$_POST["title"];
	$article=$_POST["article"];
	$time=$_POST["time"];
	$mysqli=new MySQLi("localhost","root","root","php212");
	$sql="insert into news (title,article,time) values ('".$title."',"."'".$article."',"."'".$time."')";
	$res=$mysqli->query($sql);
	if($res && $mysqli->affected_rows>0){
		echo "<script>alert('ok')</script><a href='insert.html'>返回上一页</a>";
		
	}else{
		echo "添加失败";
	}
?>
