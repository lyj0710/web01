<?php
require_once('session.php');
require_once ('../inc/conn_pdo.php');
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
if($_POST['content']==""){
    echo "<script>alert('内容不能为空！！');history.go(-1);</script>";;
    exit;
}
$pubdate=trim($_POST['pubdate']);
$keywords=trim($_POST['keywords']);
$description=trim($_POST['description']);

$sql="update single set title=?,comefrom=?,pubdate=?,thumbnail=?,keywords=?,description=?,content=? where id=?";
$sth = $dbh->prepare($sql);
$sth->execute(array($_POST['title'],$_POST['comefrom'],$pubdate,$_POST['thumbnail'],$keywords,$description,$_POST['content'],$_GET['id']));

echo "<script>alert('修改成功！');window.location.href='single_list.php';</script>";
$dbh = null;
?>
</body>
</html>
