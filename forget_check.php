<?php 
header("Content-Type: text/html; charset=utf-8");
if (!session_id()) {
	session_start();
}
if(empty($_POST['forget_user_name'])){
	echo "<script>alert('你无权访问该网页！');window.location.href='login.php'</script>";
    exit;
}
require_once('inc/conn.php');
$user_name=$_POST['forget_user_name'];
$user_phone=$_POST['phone'];

$sql="select * from user where username='".$user_name."' and phone='".$user_phone."'";
$result=mysql_query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
</head>
<body>
<?php
if($result){
//获取$result数组中记录的行数
	$row=mysql_num_rows($result);
//判断是否找到相应的数据记录
	if ($row>0) {
		$_SESSION['passchecked']='ok';
		$_SESSION['forget_user_name']=$_POST['forget_user_name'];
		echo "<script>alert('验证成功!');window.location.href='password_modify.php'</script>";
		exit;
	}else{
		echo "<script>alert('你的帐号或手机号不正确!');window.location.href='forget.php'</script>";
		exit;
	}
}
 ?>
 </body>
</html>