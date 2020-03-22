<?php 
// header("Content-Type: text/html; charset=utf-8");
if (!session_id()) {
    session_start();
require_once('inc/conn.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 
    if (empty($_SESSION['login_user_name'])){
            echo"<script>alert('请先登录！');history.go(-1)</script>";
            exit;
        }

    if ($_POST['content']=='') {
            echo "<script>alert('评论不能为空！');history.go(-1)</script>";
                exit;
        }
    $sql_comment="insert into pro_comments(username,id_art,content,pubdate) values('".$_SESSION['login_user_name']."','".$_GET['id']."','".$_POST['content']."',curdate())";
        mysql_query($sql_comment);
    echo"<script>alert('评论成功！');history.go(-1)</script>";
//关闭数据库连接
mysql_close($conn);
?>
</body>
</html>
