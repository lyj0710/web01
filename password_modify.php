<?php 
header("Content-Type: text/html; charset=utf-8");
if (!session_id()) {
	session_start();
}
if(empty($_SESSION['forget_user_name'])&&$_SESSION['passchecked']<>'ok'){
	echo "<script>alert('你无权访问该网页！');window.location.href='login.php'</script>";
    exit;
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1">
	<title>密码修改页</title>
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="js/jquery-1.10.2.js"></script>
</head>
<body>

	<div class="login_cont">
		<form class="form-inline" name="form1" id="form1" action="password_modify_pass.php?<?$_SESSION['forget_user_name']?>" method="post">
			<div class="input_signup active">
				<input class="input" id="password" type="password" name="newpassword" aria-label="密码" placeholder="请输入新的密码（不少于 6 位）">
				<div class="hint">请填写符合格式的密码</div>
				<input class="input" id="repassword" type="password" aria-label="密码" placeholder="再次输入密码">
				<div class="hint">请再次输入密码</div>
				<input type="submit" id="submit" class="button" name="button" value="确认">
			</div>
		</form>
	</div>

	<script type="text/javascript" src="js/login.js"></script>
	<script type="text/javascript" src="js/form.js"></script>

</body>
</html>