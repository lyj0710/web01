<?php
require_once('session.php');
require_once ('../inc/conn_pdo.php');
$sql="select * from single where id='".$_GET['id']."'";
$rows = $dbh->query($sql);
$rs = $rows->fetch();
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title></title>
    <link rel="stylesheet" href="kindeditor/themes/default/default.css" />
    <link href="css/table.css" rel="stylesheet" type="text/css" />
    <script src="kindeditor/kindeditor-min.js"></script>
    <script src="kindeditor/lang/zh_CN.js"></script>

    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
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

    <script>
        var editor;
        KindEditor.ready(function(K){
            editor=K.create('textarea[name="content"]',{
                allowFileManager:true
            });
            //缩略图
            K('#image4').click(function(){
                editor.loadPlugin('image',function(){
                    editor.plugin.imageDialog({
                        showRemote:false,
                        imageUrl:K('#thumbnail').val(),
                        clickFn:function(url,title,width,height,border,align){
                            K('#thumbnail').val(url);
                            editor.hideDialog();
                        }
                    });
                });
            });
        });
    </script>
</head>
<body>
<div class="container-fluid">
    <h4>修改单页</h4>
    <form id="form1" name="form1" method="post" action="single_modify_pass.php?id=<?php echo $rs['id']?>">
        <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-append  col-md-2">
            <label for="title"><span style="color:#F30">*</span>标题：</label></div>
            <input id="title" name="title" class="form-control col-md-9"  type="text" size="40" value="<?=$rs['title'] ?>" />
        </div></div>
        <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-append  col-md-2">
            <label for="comefrom">来源：</label></div>
            <input id="comefrom" name="comefrom" class="form-control col-md-9" type="text" size="40" value="<?=$rs['comefrom'] ?>" />
        </div></div>
        <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-append  col-md-2">
            <label for="pubdate">发布日期：</label>
            </div>
                <input id="pubdate" name="pubdate" class="form-control col-md-9" type="text" size="40" value="<?=$rs['pubdate'] ?>" />
        </div></div>
        <div class="form-group">
             <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
            <label for="thumbnail">缩略图：</label>
            </div>
                <input id="thumbnail" name="thumbnail" class="form-control col-md-9"  type="text" size="40"
                       value="<?php echo isset($rs['thumbnail'])?$rs['thumbnail']:'' ?>" />
                <div class="input-group-append">
                    <button id="image4" class="btn btn-secondary" type="button">上传</button>
                </div>
            </div>
        </div>
        <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-append  col-md-2">
            <label for="keywords">关键字：</label></div>
            <textarea id="keywords" name="keywords" class="form-control col-md-9"  type="text" size="40">
                <?=$rs['keywords'] ?>
            </textarea>
        </div></div>
        <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-append  col-md-2">
            <label for="description">描述：</label></div>
            <textarea id="description" name="description" class="form-control col-md-9"  type="text" size="40">
                <?=$rs['description'] ?>
            </textarea>
        </div></div>
        <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-append  col-md-2">
            <label for="content"><span style="color:#F30">*</span>内容：</label></div>
            <textarea id="content" name="content" class="form-control col-md-9"  type="text" size="40">
                <?=htmlspecialchars($rs['content']) ?>
            </textarea>
        </div></div>
        <button type="submit" class="btn btn-secondary" style="margin-left:45%;margin-bottom:20px;">提&nbsp;&nbsp;&nbsp;&nbsp;交</button>
    </form>
</div>
</body>
</html>
