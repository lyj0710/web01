<?php
require_once('session.php');
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>添加焦点幻灯</title>
    <link rel="stylesheet" href="kindeditor/themes/default/default.css" />
    <script charset="UTF-8" src="kindeditor/kindeditor-min.js"></script>
    <script charset="UTF-8" src="kindeditor/lang/zh_CN.js"></script>

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
            var editor=K.editor({
                allowFileManager:true
            });
            K('#slide_image').click(function(){
                editor.loadPlugin('image',function(){
                    editor.plugin.imageDialog({
                        showRemote:true,
                        imageUrl:K('#slide_url').val(),
                        clickFn:function(url,title,width,height,border,align){
                            K('#slide_url').val(url);
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
    <h4>添加焦点幻灯</h4>
    <form id="form1" name="form1" method="post" action="slide_add_pass.php">
        <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-append  col-md-2">
            <label for="title"><span style="color:#F30;font-size:25px;">*</span>标题：</label></div>
            <input id="title" name="title" class="form-control col-md-6"  type="text" size="50" />
        </div></div>
        <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-append  col-md-2">
            <label for="link">链接：</label></div>
            <input id="link" name="link" class="form-control col-md-6" type="text" size="50" />
        </div></div>
        <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-append  col-md-2">
            <label for="slide_url"><span style="color:#F30;font-size:25px;">*</span>缩略图：</label></div>
                <input id="slide_url" name="thumbnail" class="form-control col-md-6" type="text" size="50" value="" />
                <div class="input-group-append">
                    <button id="slide_image" class="btn btn-secondary" type="button">选择图片</button>
                </div>
            </div>
        </div>
        <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-append  col-md-2">
            <label for="orderid"><span style="color:#F30">*</span>排序：</label></div>
            <input id="orderid" name="orderid" class="form-control col-md-6"  type="text" size="50" />
        </div></div>
        <button type="submit" class="btn btn-secondary" style="margin-left:45%;margin-bottom:20px;">提交</button>
    </form>
</div>
</body>
</html>
