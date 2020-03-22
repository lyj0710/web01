<?php 
session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<?php 
 		unset($_SESSION['login_user_name']);
 		// session_unset();
 		// session_destroy();
 		
 		echo"<script>alert('退出成功！');window.parent.location.href='index.php'</script>"
 	 ?>
 </body>
 </html>