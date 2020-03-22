<?php
require_once('session.php');
require_once('../inc/conn_pdo.php');
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>产品列表</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="js/bootstrap.min.js"></script>
    <link href="css/table.css" rel="stylesheet" type="text/css" />
    <style>
        *{
            font-size:12px;
        }
    </style>
</head>
<body>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <td class="tt" colspan="5"><span style="font-size:25px">产品列表</span></td>
        </tr>
        <tr>
            <td>ID</td>
            <td>标题</td>
            <td>发布日期</td>
            <td colspan="2">操作</td>
        </tr>
        <?php
            //记录的总条数
            $total_num=$dbh->query("select id from clothes")->rowCount();
            //设置每页显示的记录数
            $pagesize=10;
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
            $sql="select * from clothes order by id desc limit $offset,$pagesize";
            $rows = $dbh->query($sql);
            if($total_num>0){
                foreach($rows as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td>
                            <?php echo $row['title'] ?>
                            <?php
                                if(strpos($row['posid'],'setindex')!==false){
                                    echo "&nbsp;&nbsp;[<span style='color:red;'>首页推荐</span>]&nbsp;&nbsp;";
                                }
                            ?>
                        </td>
                        <td><?php echo $row['pubdate'] ?></td>
                        <td>
                            <input type="submit" name="button" id="button" value="修改" class="btn btn-secondary"
                                   onclick="window.location.href='clothes_modify.php?id=<?php echo $row['id'] ?>'"/>
                            <input type="submit" name="button2" id="button2" value="删除" class="btn btn-secondary"
                                   onclick="window.location.href='clothes_delete.php?id=<?php echo $row['id'] ?>'"/>
                        </td>
                    </tr>
                    <?php
                }
            }else {
                ?>
                <tr>
                    <td colspan="5">暂无记录！</td>
                </tr>
                <?php
            }
            ?>
        <tr>
            <td colspan="6" align="center">
                <?=$page?>/<?=$page_num?>&nbsp;&nbsp;
                <a href="?page=1">首页</a>&nbsp;&nbsp;
                <a href="?page=<?=$prepage?>">上一页</a>&nbsp;&nbsp;
                <a href="?page=<?=$nextpage?>">下一页</a>&nbsp;&nbsp;
                <a href="?page=<?=$page_num?>">尾页</a>
            </td>
        </tr>
    </table>
</body>
<?php
$dbh = null;
?>
</html>
