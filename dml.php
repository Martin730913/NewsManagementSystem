<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>新闻管理</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<style type="text/css">
			tr,th{
				text-align: center;
			}
			.form-inline{
				margin-bottom: 2rem;
			}
		</style>
	</head>
	<body>
		
		<div class="container">
		<?php
			if(!empty($_POST["search"])){
				$search=$_POST["search"];
				$sql="select id,title,time from news where title like '%".$search."%'";
				require_once("index_dml.php");
			}else{
				$sql="select id,title,time from news";
				require_once("index_dml.php");
				echo "<form action='dml.php' method='post' style='float: left;margin-right: 5rem;' class='form-inline'>
				<input type='text' name='search' placeholder='请输入文章题目' class='form-control' />
				<input type='submit' value='搜索' class='btn btn-default' />
				</form>";
			}
		?>
			<table border="1" class="table table-bordered" id="table">
				<tr>
					<th>标题</th>
					<th>上传时间</th>
					<th>操作</th>
				</tr>
				<?php
					/* echo "<pre>";
					echo var_dump($res);
					echo "</pre>"; */
					if(is_object($res)){
						while($row=$res->fetch_row()){
							echo "<tr>";
							for($k=1;$k<count($row);$k++){
								echo "<td>".$row[$k]."</td>";
							}
							echo "<td><form action='delete.php' method='post'><input type='hidden' name='opration'  value='".$row[0]."' /><button type=''submit'>删除新闻 </button></form></td>";
							echo "<tr/>";
						}
					}
					
				?>
			</table>
		</div>
		<?php
		if(is_object($res)){
			$res->free();
		}
		?>
		
	</body>
</html>