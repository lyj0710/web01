<?php require_once('session.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
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
	<link href="kindeditor/themes/default/default.css" type="text/css" rel="stylesheet" />
    <script charset="utf-8" src="kindeditor/kindeditor-min.js"></script>
    <script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
	<script>
		var editor;
		KindEditor.ready(function(K){
			editor=K.create('textarea[name="content"]',{
				allowFileManager:true
			});
            //缩略图
			K('#image3').click(function(){
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
	<h4 style="padding-left:15px;">添加单页</h4>
	<form id="form1" name="form1" method="post" action="single_add_pass.php">
		<table width="100%" border="1" cellspacing="0" cellpadding="0">
			<div class="form-group">
            		<div class="input-group mb-3">
                		<div class="input-group-append  col-md-2">
                    		<label for="title"><span style="color:#F30;font-size:25px;">*</span>标题：</label>
                		</div>
               				 <input id="title" name="title" class="form-control col-md-6"  type="text" size="50"  />
            			</div>
        		</div>
			<div class="form-group">
            		<div class="input-group mb-3">
                		<div class="input-group-append  col-md-2">
                    		<label for="title">来源：</label>
                		</div>
               				 <input name="comefrom" id="comefrom" type="text" value="本站" class="form-control col-md-6"  type="text" size="50"  />
            			</div>
        		</div>
			<div class="form-group">
            		<div class="input-group mb-3">
                		<div class="input-group-append  col-md-2">
                    		<label for="pubdate">发布时间：</label>
                		</div>
							<input class="form-control col-md-2" name="pubdate" type="text" id="pubdate" value="<?php 
								date_default_timezone_set('UTC');
									echo date("Y年m月d日");?>"/>            			
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
                    <button id="image3" class="btn btn-secondary" type="button">上传</button>
                </div>
            </div>
        </div>
			<div class="form-group">
            		<div class="input-group mb-3">
                		<div class="input-group-append  col-md-2">
                    		<label for="keywords">关键词：</label>
                		</div>
               				 <textarea name="keywords" id="keywords" cols="60" rows="3" class="form-control col-md-6" ></textarea>
            			</div>
        		</div>
			<div class="form-group">
            		<div class="input-group mb-3">
                		<div class="input-group-append  col-md-2">
                    		<label for="description">描述：</label>
                		</div>
               				 <textarea name="description" id="description" cols="60" rows="3" class="form-control col-md-6"></textarea>
            			</div>
        		</div>
			<div class="form-group">
            		<div class="input-group mb-3">
                		<div class="input-group-append  col-md-2">
                    		<label for="content"><span style="color:#F30;font-size:25px;">*</span>内容：</label>
                		</div>
               				 <textarea name="content" id="content" cols="60" rows="3" class="form-control col-md-6"></textarea>
            			</div>
        		</div>
			
			<button type="submit" class="btn btn-secondary" name="button" id="button" style="margin-left:45%;margin-bottom:20px;">提&nbsp;&nbsp;&nbsp;&nbsp;交</button>
		</table>
	</form>
    </div>
</body>
</html>