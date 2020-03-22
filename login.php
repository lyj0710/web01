<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1">
	<title>前端登录页</title>
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="js/jquery-1.10.2.js"></script>
</head>
<body>

	<div class="login_cont">
		<div class="login_nav">
			<div class="nav_slider">
				<a href="#" class="signup focus">注册</a>
				<a href="#" class="signin">登录</a>
			</div>
		</div>
		<form class="form-inline" name="form1" id="form1" action="register.php" method="post">
			<div class="input_signup active">
				<input class="input" id="user_name" type="text" name="user_name" aria-label="用户名（包含字母／数字／下划线" placeholder="用户名">
				<div class="hint">请填写符合格式的用户名</div>
				<input class="input" id="user_email" type="text" name="user_email" aria-label="邮箱" placeholder="邮箱">
				<div class="hint">请填写邮箱</div>
				<input class="input" id="phone" type="text" class="account" name="phone" aria-label="手机号（仅支持中国大陆）" placeholder="手机号（仅支持中国大陆）">
				<div class="hint">请填写手机号</div>
				<input class="input" id="password" type="password" name="password" aria-label="密码" placeholder="密码（不少于 6 位）">
				<div class="hint">请填写符合格式的密码</div>
				<input class="input" id="repassword" type="password" aria-label="密码" placeholder="再次输入密码">
				<div class="hint">请再次输入密码</div>
				<input type="submit" id="submit" class="button" name="button" value="注册">
			</div>
		</form>
		<form class="form-inline" name="form2" id="form2" action="login_check.php" method="post">
			<div class="input_signin">
				<input class="input" id="login_user_name" type="text" name="login_user_name" aria-label="用户名" placeholder="用户名" style="color:#fff;">
				<div class="hint">请输入用户名</div>
				<input class="input" id="login_password" type="password" name="login_password" aria-label="密码" placeholder="密码">
				<div class="hint">请输入密码</div>
				<input type="submit" id="button" class="button" name="button" value="登录">
				<div class="forget">
					<a href="forget.php">忘记密码？</a>
				</div>
			</div>
		</form>
	</div>

	<script type="text/javascript" src="js/login.js"></script>
	<script type="text/javascript" src="js/form.js"></script>

</body>
</html>