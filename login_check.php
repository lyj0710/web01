<?php
/*
 如果php版本低于7，使用下列代码
 */
session_start();
require_once('inc/conn.php');
//设置该页面的编码为utf-8
header("Content-Type:text/html;charset=utf-8");
//接收表单传递过来的值并赋给相应的变量$user_name和$user_pass
$user_name=$_POST['login_user_name'];
$user_pass=$_POST['login_password'];
//将查询语句赋给变量$sql
$sql="select * from user where username='".$user_name."' and password='".$user_pass."'";
//执行sql语句，并将结果返回给变量$result,实际上，返回的结果是一个数组
$result=mysql_query($sql);
if($result){
//获取$result数组中记录的行数
	$row=mysql_num_rows($result);
//判断是否找到相应的数据记录
 		if ($user_name=="") {
 			echo "<script>alert('账号不能为空！');history.go(-1)</script>";
 			exit;
 		}
 		$user_pass=$_POST['login_password'];
 		if($user_pass=="") {
 			echo "<script>alert('密码不能为空！');history.go(-1)</script>";
 			exit;
 		}
	if ($row>0) {
		$_SESSION['fchecked']="ok";
		$_SESSION['login_user_name']=$_POST['login_user_name'];
		echo "<script>alert('登陆成功!');window.location.href='index.php'</script>";
		exit;
	}else{
		echo "<script>alert('你的帐号或密码不正确!');window.location.href='login.php'</script>";
		exit;
	}
}
//关闭数据库连接
mysql_close($conn);
 ?>