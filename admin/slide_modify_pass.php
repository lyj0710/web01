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
if ($_POST['thumbnail']==""){
	echo "<script>alert('缩略图不能为空！');history.go(-1)</script>";
	exit;
}
if (!is_numeric($_POST['orderid'])){
	echo "<script>alert('排序必须为数字！');history.go(-1)</script>";
	exit;
}

try {
    $sql_modify="update slide set title=?,link=?,thumbnail=?,orderid=? where id=?";
    $sth = $dbh->prepare($sql_modify);
    $sth->execute(array($_POST['title'], $_POST['link'], $_POST['thumbnail'], $_POST['orderid'],$_GET['id']));
    echo "<script>alert('修改成功！');window.location.href='slide_list.php';</script>";
} catch (PDOException $e) {
    die('修改失败:' .$e->getMessage() . "<br/>");
}
$dbh = null;
?>
</body>
</html>
