<?php
require_once('session.php');
require_once('../inc/conn_pdo.php');
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>单页列表</title>
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
        <td colspan="5"><span style="font-size:25px">单页列表</span></td>
    </tr>
    <tr>
        <td>单页ID</td>
        <td>标题</td>
        <td>发布日期</td>
        <td colspan="2">操作</td>
    </tr>
    <?php
    //记录的总条数
    $total_num=$dbh->query("select id from single")->rowCount();
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
    //计算记录的编移量
    $offset=$pagesize*($page-1);
    //上一页、下一页
    $prepage=($page<>1)?$page-1:$page;
    $nextpage=($page<>$page_num)?$page+1:$page;
    //读取指定记录数
    $sql = "select * from single limit $offset,$pagesize";
    $sth = $dbh->prepare($sql);
    $sth->execute();
    $rows = $sth->fetchAll();

    /*$sql="select * from single limit $offset,$pagesize";
    $rows = $dbh->query($sql);*/

    if($total_num>0){
        foreach ($rows as $row) {
            echo "<tr>".
                "<td>".$row['id']."</td>".
                "<td>".$row['title']."</td>".
                "<td>".$row['pubdate']."</td>".
                "<td><input type='button' name='button' id='button' value='修改' class='btn btn-secondary' onclick='window.location.href=\"single_modify.php?id=".$row['id']."\"' />".
                "    <input type='button' name='button2' id='button2' value='删除' class='btn btn-secondary' onclick='window.location.href=\"single_delete.php?id=".$row['id']."\"' ";
            echo "/>".
                "</td>".
                "</tr>";

        }
    }else{
        echo "<tr><td colspan='5' height='31' style='color:red;font-size:13px'>暂无记录</td></tr>";
    }
    ?>
    <tr>
        <td colspan="5" align="center"> <?=$page?>/<?=$page_num?>&nbsp;&nbsp;<a href="?page=1">首页</a>&nbsp;&nbsp;	<a href="?page=<?=$prepage?>">上一页</a>&nbsp;&nbsp;<a href="?page=<?=$nextpage?>">下一页</a>&nbsp;&nbsp;<a href="?page=<?=$page_num?>"> 尾页</a> </td>
    </tr>
</table>
</body>
<?php
$dbh = null;
?>
</html>
