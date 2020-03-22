<?php 
header("Content-Type: text/html; charset=utf-8");
if (!session_id()) {
	session_start();
}
if(empty($_SESSION['forget_user_name'])&&$_SESSION['passchecked']<>'ok'){
	echo "<script>alert('你无权访问该网页！');window.location.href='login.php'</script>";
    exit;
}
require_once ('inc/conn_pdo.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
</head>
<body>
<?php 
if($_POST['newpassword']==''){
    echo "<script>alert('请输入新密码!');window.location.href='password_modify.php?id=".$_SESSION['forget_user_name']."'</script>";
    exit;
}
$sql="update user set password=? where username=?";
$sth = $dbh->prepare($sql);
$sth->execute(array($_POST['newpassword'], $_SESSION['forget_user_name']));

session_unset();
session_destroy();
echo "<script>alert('修改成功，正在前往登录页面!');window.location.href='login.php'</script>";
$dbh = null;


 ?>
 </body>
</html>