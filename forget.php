<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1">
	<title>找回密码</title>
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

	<div class="login_cont">
		<form class="form-inline" name="form1" id="form1" action="forget_check.php" method="post">
			<div class="input_cont">
				<input class="input" id="forget_user_name" type="text" name="forget_user_name" aria-label="用户名" placeholder="用户名" style="color:#fff;">
				<div class="hint">请输入用户名</div>
				<input class="input" id="forget_user_phone" required type="text" name="phone" aria-label="手机号" placeholder="手机">
				<div class="hint">密码将通过手机找回，请谨慎填写</div>
				<a href="#">
					<input type="submit" id="submit" name="button" value="点击验证">
				</a>
			</div>
			<div class="nav">
		<div class="nav_left"><a href="login.html">返回</a></div>
		<div class="nav_right"></div>
	</div>
		</form>
	</div>

	<script type="text/javascript" src="js/form.js"></script>
</body>
</html>