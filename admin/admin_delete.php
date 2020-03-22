<?php
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
	<?
	$sql="DELETE FROM admin WHERE id='".$_GET['id']."'";
	mysql_query($sql);
	echo "<script>alert('删除成功!');window.location.href='admin_list.php'</script>";
	mysql_close($conn);
	?>
</body>
</html>