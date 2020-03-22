<?php
require_once('session.php');
require_once ('../inc/conn_pdo.php');
$sql="select * from admin where id='".$_GET['id']."'";
$rows = $dbh->query($sql);
$row = $rows->fetch();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理员列表</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="js/bootstrap.min.js"></script>
     <link href="css/table.css" rel="stylesheet" type="text/css" />
    <style>
        *{
            font-size:12px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <h4>修改管理员</h4>
    <form class="form-inline" name="form_add" id="form_add" action="admin_modify_pass.php?id=<?=$row['id']?>" method="post" >
        <label for="admin_name" class="col-md-1">帐号:</label>
        <input type="text" class="form-control col-md-3" id="admin_name" name="admin_name" value="<?=$row['admin_name']?>" disabled='disabled'>
        <label for="admin_pass"  class="col-md-1">密码:</label>
        <input type="password" class="form-control col-md-3" id="admin_pass" name="admin_pass" placeholder="若修改，请输入新密码！">
        <button type="submit" class="btn btn-secondary" style="margin-left:20px;">修&nbsp;&nbsp;&nbsp;&nbsp;改</button>
    </form>
</div>
</body>
</html>
<?php
$dbh = null;
?>