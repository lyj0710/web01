<?php 
header("Content-Type: text/html; charset=utf-8");
require_once('inc/conn.php');
    if ($_GET['act']=="add") {
        if ($_POST['title']=='') {
            echo "<script>alert('留言标题不能为空！');history.go(-1)</script>";
                exit;
            }
        if ($_POST['name']=='') {
            echo "<script>alert('称呼不能为空！');history.go(-1)</script>";
                exit;
            }
        if ($_POST['email']=='') {
            echo "<script>alert('请留下您的电子邮箱！');history.go(-1)</script>";
                exit;
            }
        if ($_POST['content']=='') {
            echo "<script>alert('还没写下你的留言内容呢！');history.go(-1)</script>";
                exit;
            }
    $sql_geustbook="insert into guestbook(title,pubdate,name,tel,qq,email,content,deal) values('".$_POST['title']."',curdate(),'".$_POST['name']."','".$_POST['tel']."','".$_POST['qq']."','".$_POST['email']."','".$_POST['content']."','否')";
        mysql_query($sql_geustbook);
        echo"<script>alert('留言成功，我们会尽快联系您！');window.location.href='contact.php';</script>";
        }else{
            echo"<script>alert('留言失败！');history.go(-1)</script>";
                exit;
        }
//关闭数据库连接
mysql_close($conn);
?>