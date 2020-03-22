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
 		session_unset();
 		session_destroy();
 		
 		echo"<script>alert('后台退出成功！');window.parent.location.href='login.php'</script>"
 	 ?>
 </body>
 </html>