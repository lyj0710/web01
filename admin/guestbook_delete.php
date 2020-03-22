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
	<link rel="stylesheet" href="css/table.css" type="text/css">
</head>
<body>
	<?php
		$sql="delete from guestbook where id='".$_GET['id']."'";
		$count = $dbh->exec($sql);
		echo "<script>alert('删除成功!');window.location.href='guestbook.php'</script>";
		$dbh = null;
	?>
</body>
</html>