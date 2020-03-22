<?php 
session_start();
require_once('session.php');
require_once('../inc/conn.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>添加文章信息</title>
 	<link href="css/table.css" rel="stylesheet" type="text/css" />
    <link href="kindeditor/themes/default/default.css" type="text/css" rel="stylesheet" />
    <script charset="utf-8" src="kindeditor/kindeditor-min.js"></script>
    <script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>

    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="js/bootstrap.min.js"></script>
    <link href="css/table.css" rel="stylesheet" type="text/css" />
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
    <style>
        *{
            font-size:12px;
        }
    </style>
 </head>
 <body>
 <h4 style="padding-left:15px;">添加文章</h4>
 	<form action="article_add_pass.php" id="form1" name="form1" method="post" class="">
 		<div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="title"><span style="color:#F30;font-size:25px;">*</span>标题：</label>
                </div>
                <input id="title" name="title" class="form-control col-md-6"  type="text" size="40"  />
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="comefrom">来源：</label>
                </div>
                <input id="comefrom" name="comefrom" class="form-control col-md-6"  type="text" size="40" value="本站" />
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="pubdate">发布日期：</label>
                </div>
                <input id="pubdate" name="pubdate" class="form-control col-md-6"  type="text" size="40" value="<?php date_default_timezone_set('UTC');
                echo date("Y年m月d日");?>" />
            </div>
        </div>
        <div class="form-group">
             <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
            <label for="thumbnail">缩略图：</label>
            </div>
                <input id="thumbnail" name="thumbnail" class="form-control col-md-6"  type="text" size="40"
                       value="" />

                <div class="input-group-append">
                    <button id="image4" class="btn btn-secondary" type="button">上传</button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="keywords">关键词：</label>
                </div>
                <textarea id="keywords" name="keywords" class="form-control col-md-6"  type="text" cols="60" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group">
        <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
            <label for="description">描述：</label>
            </div>
            <textarea id="description" name="description" class="form-control col-md-6"  type="text" size="50"></textarea>
        </div>
        </div>
		<div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="content"><span style="color:#F30;font-size:25px;">*</span>内容：</label>
                </div>
                <textarea id="content" name="content" class="form-control col-md-6" style="width:800px;height:300px;"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                <label for="posid">推荐位：</label>
                </div>
                <input id="posid" name="posid[]"   type="checkbox"  value="setindex" />首页推荐&nbsp;&nbsp;<input type="checkbox" name="posid[]" id="posid" value="settop">
                首页置顶
            </div>
        </div>
		<button type="submit" class="btn btn-secondary " style="margin-left:45%;margin-bottom:20px;">提&nbsp;&nbsp;&nbsp;&nbsp;交</button>
 	</form>
 </body>
 </html>