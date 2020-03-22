<?php
require_once('session.php');
require_once('../inc/conn_pdo.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
    try {
        $sql = "delete from slide where id= :id";
        $sth = $dbh->prepare($sql);
        $sth->execute(array(':id' => $_GET['id']));
        echo "<script>alert('删除成功');window.location.href='slide_list.php'</script>";
    } catch (PDOException $e) {
        die('删除失败:' .$e->getMessage() . "<br/>");
    }
    $dbh = null;
?>
</body>
</html>