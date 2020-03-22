<?php
require_once('session.php');
require_once('../inc/conn_pdo.php');
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="js/bootstrap.min.js"></script>
    <link href="css/table.css" rel="stylesheet" type="text/css" />
    <title>留言列表</title>
    <style>
        *{
            font-size:12px;
        }
        li{
            list-style: none;
        }
    </style>
</head>
<body>
<table class="table table-striped table-hover table-bordered">
    <tr>
        <td colspan="7">留言列表</td>
    </tr>
    <tr>
        <td><strong>标题</strong></td>
        <td><strong>日期</strong></td>
        <td><strong>留言人</strong></td>
        <td><strong>联系方式</strong></td>
        <td style="width:50%;"><strong>留言内容</strong></td>
        <td><strong>是否处理</strong></td>
        <td><strong>操作</strong></td>
    </tr>
    <?php
    //记录的总条数

    $rows = $dbh->query("select * from guestbook");
    $total_num = $rows->rowCount();

    //设置每页显示的记录数
    $pagesize=5;
    //计算总页数
    $page_num=ceil($total_num/$pagesize);
    //设置页数
    $page=isset($_GET['page'])?$_GET['page']:1;
    if($page<1 || $page==''){
        $page=1;
    }
    if($page>$page_num){
        $page=$page_num;
    }
    //计算记录的偏移量
    $offset=$pagesize*($page-1);
    //上一页、下一页
    $prepage=($page<>1)?$page-1:$page;
    $nextpage=($page<>$page_num)?$page+1:$page;
    //读取指定的记录数

    $sql="select * from guestbook order by id desc limit $offset,$pagesize";
    $rows = $dbh->query($sql);
    if($total_num>0){
        foreach ($rows as $row) {
            ?>
            <tr>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['pubdate'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td>
                    <li>
                        邮箱:<?php echo isset($row['email'])?$row['email']:"" ?>
                    </li>
                    <li>
                        QQ:<?php echo isset($row['qq'])?$row['qq']:"" ?>
                    </li>
                    <li>
                        电话:<?php echo isset($row['tel'])?$row['tel']:"" ?>
                    </li>
                </td>
                <td><?php echo $row['content'] ?></td>
                <td>
                    <span style="color:red;"><?=$row['deal'] ?></span>
                    (<?php
                    if($row['deal']=='否'){
                        ?>
                        <a href="guestbook_deal.php?deal=yes&id=<?=$row['id']?>">单击设置为"已处理"</a>
                        <?php
                    }else{
                        ?>
                        <a href="guestbook_deal.php?deal=no&id=<?=$row['id']?>">单击设置为"未处理"</a>
                        <?php
                    }
                    ?>)
                </td>
                <td>
                    <input type="submit" name="button2" id="button2" value="删除" class="btn btn-danger"
                           onclick="window.location.href='guestbook_delete.php?id=<?php echo $row['id'] ?>'"/>
                </td>
            </tr>
        <?php
            }
        }else {
        ?>
            <tr>
                <td colspan="7">暂无记录！</td>
            </tr>
    <?php
    }
    ?>
    <tr>
        <td colspan="7" align="center">
            <?=$page?>/<?=$page_num?>&nbsp;&nbsp;
            <a href="?page=1">首页</a>&nbsp;&nbsp;
            <a href="?page=<?=$prepage?>">上一页</a>&nbsp;&nbsp;
            <a href="?page=<?=$nextpage?>">下一页</a>&nbsp;&nbsp;
            <a href="?page=<?=$page_num?>">尾页</a>&nbsp;&nbsp;
        </td>
    </tr>
</table>
</body>
<?php
$dbh = null;
?>
</html>
