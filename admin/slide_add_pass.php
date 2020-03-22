<?php
require_once('session.php');
require_once('../inc/conn_pdo.php');
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title></title>
</head>
<body>
<?php
if($_POST['title']==""){
    echo "<script>alert('标题不能为空！！');history.go(-1);</script>";;
    exit;
}
if($_POST['thumbnail']==""){
    echo "<script>alert('缩略图不能为空！！');history.go(-1);</script>";;
    exit;
}
if(!is_numeric($_POST['orderid'])){
    echo "<script>alert('排序必须为数字！');history.go(-1);</script>";;
    exit;
}

try {
    $sql_add="insert into slide (title,link,thumbnail,orderid) values (?,?,?,?)";
    $sth = $dbh->prepare($sql_add);
    $sth->execute(array($_POST['title'], $_POST['link'], $_POST['thumbnail'], $_POST['orderid']));
    echo "<script>alert('添加成功！');window.location.href='slide_list.php';</script>";
} catch (PDOException $e) {
    die('添加失败:' .$e->getMessage() . "<br/>");
}
$dbh = null;
?>
</body>
</html>

