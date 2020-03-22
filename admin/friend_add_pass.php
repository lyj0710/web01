<?php 
session_start();
require_once('session.php');
require_once('../inc/conn.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<?php 
 		if ($_POST['title']=="") {
 			echo "<script>alert('标题不能为空！');history.go(-1)</script>";
 			exit;
 		}
 		if ($_POST['url']=="") {
 			echo "<script>alert('链接地址不能为空！');history.go(-1)</script>";
 			exit;
 		}
 		// elseif(mysql_num_rows(mysql_query("SELECT * FROM friend WHERE title='".$_POST['title']."'"))>0){
 		// 	echo"<script>alert('该标题已存在,请换另一个标题！');window.location.href='friend_add.php'</script>";
 		// 	exit;
 		// }
 		$sql="INSERT INTO friend(title,url)VALUES('".$_POST['title']."','".$_POST['url']."')";
 		mysql_query($sql,$conn);
 			echo"<script>alert('添加成功！');window.location.href='friend_list.php'</script>";
 		mysql_close($conn);
 	 ?>
 </body>
 </html>