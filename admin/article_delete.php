<?php 
session_start();
require_once('session.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>删除文章信息</title>
</head>
<body>
	<?php 
		require_once('../inc/conn.php');
		$sql="delete from article where id='".$_GET['id']."'";
		mysql_query($sql,$conn);
		echo "<script>alert('删除成功');window.location.href='article_list.php'</script>";
		mysql_close($conn);
	?>
</body>
</html>