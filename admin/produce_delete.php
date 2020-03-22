<?php
session_start();
require_once('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	require_once('../inc/conn.php');
	$sql="DELETE FROM produce WHERE id='".$_GET['id']."'";
	mysql_query($sql,$conn);
	echo "<script>alert('删除成功！');window.location.href='produce_list.php'</script>";
	mysql_close($conn);
	?>
</body>
</html>