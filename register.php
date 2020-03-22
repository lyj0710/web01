<?php 
session_start();

require_once('inc/conn.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<?php  
 	
 	$user_name=$_POST['user_name'];
 	$phone=$_POST['phone'];
 		if (mysql_num_rows(mysql_query("SELECT * FROM user WHERE username='".$_POST['user_name']."'"))>0) {
 			echo"<script>alert('该账号已存在,请换另一个账号！');window.location.href='login.php'</script>";
 			exit;
 		}
 		if (mysql_num_rows(mysql_query("SELECT * FROM user WHERE phone='".$_POST['phone']."'"))>0) {
 			echo"<script>alert('该手机已被注册,请更换另一个手机！');window.location.href='login.php'</script>";
 			exit;
 		}
		$sql_add="insert into user (username,email,phone,password) values('".$user_name."','".$_POST['user_email']."','".$_POST['phone']."','".$_POST['password']."')";
		mysql_query($sql_add);
 			echo"<script>alert('注册成功！');window.location.href='login.php'</script>";
 			exit;
 		mysql_close($conn);
		// mysql_close($conn);
		
?>
 </body>
 </html>

