<?php
require_once('session.php');
require_once('../inc/conn_pdo.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
if ($_POST['title']==""){
		echo "<script>alert('标题不能为空！');history.go(-1)</script>";
		exit;
}
if ($_POST['url']==""){
		echo "<script>alert('链接地址不能为空！');history.go(-1)</script>";
		exit;
}

$sql_modify="update friend set title=?,url=? where id=?";
$sth = $dbh->prepare($sql_modify);
$sth->execute(array($_POST['title'], $_POST['url'],$_GET['id']));

echo "<script>alert('修改成功！');window.location.href='friend_list.php';</script>";
$dbh = null;
?>
</body>
</html>
