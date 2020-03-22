<?php
/*
 如果php版本低于7，使用下列代码
 */
session_start();
require_once('../inc/conn.php');
//设置该页面的编码为utf-8
header("Content-Type:text/html;charset=utf-8");
//接收表单传递过来的值并赋给相应的变量$admin_name和$admin_pass
$admin_name=$_POST['admin_name'];
$admin_pass=$_POST['admin_pass'];
//将查询语句赋给变量$sql
$sql="select * from admin where admin_name='".$admin_name."' and admin_pass='".$admin_pass."'";
//执行sql语句，并将结果返回给变量$result,实际上，返回的结果是一个数组
$result=mysql_query($sql);
if($result){
//获取$result数组中记录的行数
	$row=mysql_num_rows($result);
//判断是否找到相应的数据记录
	if ($row>0) {
		$_SESSION['echecked']="ok";
		$_SESSION['admin_name']=$_POST['admin_name'];
		echo "<script>alert('后端登陆成功!');window.location.href='index.php'</script>";
		exit;
	}else{
		echo "<script>alert('你的帐号或密码不正确!');window.location.href='login.php'</script>";
		exit;
	}
}
//关闭数据库连接
mysql_close($conn);

/*
 php版本为php7
 */
/*session_start();
require_once('../inc/conn.php');
//设置该页面的编码为utf-8
header("Content-Type:text/html;charset=utf-8");
//接收表单传递过来的值并赋给相应的变量$admin_name和$admin_pass
$admin_name=$_POST['admin_name'];
$admin_pass=$_POST['admin_pass'];
$sql="select * from admin where admin_name='".$admin_name."' and admin_pass='".$admin_pass."'";
$result = $mysqli->query($sql);
$row=mysqli_num_rows($result);
echo $row;
//判断是否找到相应的数据记录
if ($row>0) {
	$_SESSION['ischecked']="ok";
	$_SESSION['admin_name']=$_POST['admin_name'];
	echo "<script>alert('登陆成功!');window.location.href='index.php'</script>";
	exit;
}else{
	echo "<script>alert('你的帐号或密码不正确!');window.location.href='login.php'</script>";
	exit;
}
//关闭数据库连接
$mysqli->close();*/
?>