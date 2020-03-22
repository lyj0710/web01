<?php
require_once('session.php');
require_once('../inc/conn_pdo.php');
$sql="select * from friend where id='".$_GET['id']."'";
$rows = $dbh->query($sql);
$row = $rows->fetch();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>修改友情链接</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="js/bootstrap.min.js"></script>
    <link href="css/table.css" rel="stylesheet" type="text/css" />
    <style>
        *{font-size:12px;}
        label{text-align: right;}
    </style>
</head>
<body>
<div class="container-fluid">
    <h4>修改友情链接</h4>
    <form id="form1" name="form1" action="friend_modify_pass.php?id=<?=$row['id']?>" method="post" >
        <div class="form-group row">
            <label for="title" class="col-md-2 col-form-label"><span style="color:#F60">*</span>标题：</label>
            <input id="title" name="title" class="form-control col-md-6"  type="text" size="50" value="<?=$row['title']?>" />
        </div>
        <div class="form-group row">
            <label for="url" class="col-md-2 col-form-label"><span style="color:#F60">*</span>链接地址：</label>
            <input id="url" name="url" class="form-control col-md-6" type="text" size="50" value="<?=$row['url']?>" />
        </div>
        <button type="submit" class="btn btn-secondary offset-4">提&nbsp;&nbsp;&nbsp;&nbsp;交</button>
    </form>
</div>
</body>
</html>
<?php $dbh = null; ?>