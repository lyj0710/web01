<?php
require_once('session.php');
require_once ('../inc/conn_pdo.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
</head>
<body>
<?php
if($_POST['admin_pass']==''){
    echo "<script>alert('请输入新密码!');window.location.href='admin_modify.php?id=".$_GET['id']."'</script>";
    exit;
}

$sql="update admin set admin_pass=? where id=?";
$sth = $dbh->prepare($sql);
$sth->execute(array($_POST['admin_pass'], $_GET['id']));

echo "<script>alert('修改成功!');window.location.href='admin_list.php'</script>";
$dbh = null;
?>
</body>
</html>