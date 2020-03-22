<?php
require_once('session.php');
require_once('../inc/conn_pdo.php');
//设置该页面的编码为utf-8
header("Content-Type:text/html;charset=utf-8");
try {
    $site_keywords = trim($_POST['site_keywords']);
    $site_description = trim($_POST['site_description']);
    $site_copyright = trim($_POST['site_copyright']);

    $sql_modify="update config set site_title=?,site_url=?,site_logo=?,company_ewm=?,site_keywords=?,site_description=?,
            site_copyright=?,company_name=?,company_phone=?,company_fax=?,company_email=?,company_weixin=?,company_address=?";
    $sth = $dbh->prepare($sql_modify);
    $sth->execute(array($_POST['site_title'], $_POST['site_url'], $_POST['site_logo'], $_POST['company_ewm'],$site_keywords,
        $site_description,$site_copyright,$_POST['company_name'],$_POST['company_phone'],$_POST['company_fax']
    ,$_POST['company_email'],$_POST['company_weixin'],$_POST['company_address']));
    echo "<script>alert('修改成功！');window.location.href='config.php';</script>";
} catch (PDOException $e) {
    die('修改失败:' .$e->getMessage() . "<br/>");
}
$dbh = null;
?>