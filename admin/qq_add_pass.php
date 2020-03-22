<?php
session_start();
require_once('session.php');
require_once('../inc/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>无标题文档</title>
</head>
<body>
	<?php
		if($_POST['qqnum']==""){
			echo "<script>alert('QQ号码不能为空！');history.go(-1)</script>";
			exit;
		}
	$sql="INSERT INTO qq (title,qqnum,truename) VALUES ('".$_POST['title']."','".$_POST['qqnum']."','".$_POST['truename']."')";
	mysql_query($sql,$conn);
	echo "<script>alert('添加成功！');window.location.href='qq_list.php';</script>";
	mysql_close($conn);
	?>
</body>
</html>