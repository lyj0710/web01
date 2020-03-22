<?php 
session_start();
require_once('session.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
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
 </head>
 <body>
 	<div class="container-fluid">
 		<h4 style="padding-left:15px;">添加友情链接</h4>
 		<form action="friend_add_pass.php" method="post" name="form1" id="form1" >
 			<table width="100%" border="1" cellpadding="0" cellspacing="0">
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
                    		<label for="site_title"><span style="color:#F30;font-size:25px;">*</span>链接地址：</label>
                		</div>
               				 <input id="url" name="url" class="form-control col-md-6"  type="text" size="40"  />
            			</div>
        		</div>
				<button type="submit" class="btn btn-secondary" name="button" id="button" style="margin-left:45%;margin-bottom:20px;">提&nbsp;&nbsp;&nbsp;&nbsp;交</button>
				
 			</table>
 		</form>
 	</div>
 </body>
 </html>