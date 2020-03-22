<?php
require_once('session.php');
require_once('../inc/conn_pdo.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="js/bootstrap.min.js"></script>
    <link href="css/table.css" rel="stylesheet" type="text/css" />
    <style>
		*{
			font-size: 13px;
		}
    </style>
</head>
<body>
	<table class="table-striped table-hover table-bordered" width="100%">
		<thead>
			<tr>
				<td colspan="2"><span style="font-size:25px">管理员列表</span></td>
			</tr>
			<tr>
				<td style="width:70%">账号</td>
				<td style="width:30%">操作</td>
			</tr>
		</thead>
		<tbody>
		<?php 
			$total_num = $dbh->query("select id from admin")->rowCount();
			$pagesize=10;
			$page_num = ceil($total_num/$pagesize);
			$page = isset($_GET['page'])?$_GET['page']:1;
			if($page<1 || $page==''){
				$page==1;
			}
			if($page>$page_num){
				$page=$page_num;
			}
			$offset=$pagesize*($page-1);
			$prepage = ($page<>1)?$page-1:$page;
			$nextpage = ($page<>$page_num)?$page+1:$page;

			$sql = "select * from admin limit $offset,$pagesize";
			$sth = $dbh ->prepare($sql);
			$sth ->execute();
			$rows = $sth->fetchAll();
			if($total_num>0){
				foreach($rows as $row){
					echo "<tr>".
					"<td>".$row['admin_name']."</td>".
					"<td><input type='button' class='btn btn-secondary' value='修改' onclick='window.location.href=\"admin_modify.php?id=".$row['id']."\"'/>".
					"<input type='button' class='btn btn-secondary' value='删除' onclick='window.location.href=\"admin_delete.php?id=".$row['id']."\"'";
					if($row['admin_name']=='admin'){
						echo "disabled='disabled'";
					}
					echo "/>".
					"</td>".
					"</tr>";
				}
			}else{
				echo "<tr><td colspan='2' style='color:red;'>暂无记录</td></tr>";
			}
		 ?>
			<tr>
				<td colspan="2" align="center">
				<?=$page?>/<?=$page_num?>&nbsp;&nbsp;
				<a href="?page=1?">首页</a>&nbsp;&nbsp;
				<a href="?page=<?=$prepage?>">上一页</a>&nbsp;&nbsp;
				<a href="?page=<?=$nextpage?>">下一页</a>&nbsp;&nbsp;
				<a href="?page=<?=$page_num?>">尾页</a>&nbsp;&nbsp;
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>
<?php 
$dbh=null;
 ?>