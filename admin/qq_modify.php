<?php
require_once('session.php');
require_once('../inc/conn_pdo.php');
$sql="select * from qq where id='".$_GET['id']."'";
$rows = $dbh->query($sql);
$row = $rows->fetch();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>修改QQ客服</title>
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
    <h4>修改QQ客服</h4>
    <form id="form1" name="form1" action="qq_modify_pass.php?id=<?=$row['id']?>" method="post" >
        <div class="form-group row">
            <label for="title" class="col-md-2 col-form-label">标题：</label>
            <input id="title" name="title" class="form-control col-md-6"  type="text" size="50" value="<?=$row['title']?>" />
        </div>
        <div class="form-group row">
            <label for="qqnum" class="col-md-2 col-form-label">号码：</label>
            <input id="qqnum" name="qqnum" class="form-control col-md-6" type="text" size="50" value="<?=$row['qqnum']?>" />
        </div>
        <div class="form-group row">
            <label for="truename" class="col-md-2 col-form-label">客服姓名：</label>
            <input id="truename" name="truename" class="form-control col-md-6"  type="text" size="50" value="<?=$row['truename']?>" />
        </div>
        <button type="submit" class="btn btn-secondary offset-4">提&nbsp;&nbsp;&nbsp;&nbsp;交</button>
    </form>
</div>
</body>
</html>
<?php
$dbh = null;
?>