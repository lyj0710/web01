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
if($_GET['deal']=="yes"){
    $sql = "update guestbook set deal='是' where id=".$_GET['id'];
    $count = $dbh->exec($sql);
    echo "<script>alert('已设置为\"已处理\"!');window.location.href='guestbook.php';</script>";
}
if($_GET['deal']=="no"){
    $sql = "update guestbook set deal='否' where id=".$_GET['id'];
    $count = $dbh->exec($sql);
    echo "<script>alert('已设置为\"未处理\"!');window.location.href='guestbook.php';</script>";
}
$dbh = null;
?>
</body>
</html>

