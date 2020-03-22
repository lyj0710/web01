<?php
require_once('session.php');
require_once('../inc/conn_pdo.php');
$sth = $dbh->prepare("select * from config");
$sth->execute();
$rs = $sth->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>网站基本配置</title>
    
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
            var editor=K.editor({
                allowFileManager:true
            });
            //上传网站Logo
            K('#image3').click(function(){
                editor.loadPlugin('image',function(){
                    editor.plugin.imageDialog({
                        showRemote:false,
                        imageUrl:K('#site_logo').val(),
                        clickFn:function(url,title,width,height,border,align){
                            K('#site_logo').val(url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            //上传公司二维码
            K('#image4').click(function(){
                editor.loadPlugin('image',function(){
                    editor.plugin.imageDialog({
                        showRemote:false,
                        imageUrl:K('#company_ewm').val(),
                        clickFn:function(url,title,width,height,border,align){
                            K('#company_ewm').val(url);
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
        .glyphicon{
            margin-right:5px; 
        }
    </style>

</head>
<body>
<div class="container-fluid">
    <h4 style="padding-left:15px;">网站基础配置</h4>
    <form id="form1" name="form1" method="post" action="config_save.php">
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="site_title"><span style="color:#F30;font-size:25px;">*</span><span class="glyphicon glyphicon-home" ></span>网站标题：</label>
                </div>
                <input  id="site_title" name="site_title" class="form-control col-md-6"  type="text" size="40" value="<?=isset($rs['site_title'])?$rs['site_title']:'' ?>" />
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="site_logo">&nbsp;&nbsp;<span class="glyphicon glyphicon-picture" ></span>网站logo：</label>
                </div>
                <input id="site_logo" name="site_logo" class="form-control col-md-6"  type="text" size="40"
                       value="<?php echo isset($rs['site_logo'])?$rs['site_logo']:'' ?>" />
                <div class="input-group-append">
                    <button id="image3" class="btn btn-secondary" type="button">上传</button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="company_ewm">&nbsp;&nbsp;<span class="glyphicon glyphicon-qrcode" ></span>公司二维码：</label>
                </div>
                <input id="company_ewm" name="company_ewm" class="form-control col-md-6"  type="text" size="40"
                       value="<?php echo isset($rs['company_ewm'])?$rs['company_ewm']:'' ?>" />
                <div class="input-group-append">
                    <button id="image4" class="btn btn-secondary" type="button">上传</button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="site_url"><span style="color:#F30;font-size:25px;">*</span><span class="glyphicon glyphicon-link" ></span>网站地址：</label>
                </div>
                <input id="site_url" name="site_url" class="form-control col-md-6"  type="text" size="40"
                       value="<?php echo isset($rs['site_url'])?$rs['site_url']:'' ?>" />
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="site_keywords">&nbsp;&nbsp;<span class="glyphicon glyphicon-tags" ></span>网站关键字：</label>
                </div>
                <textarea name="site_keywords" class="form-control col-md-6" cols="60" rows="3" id="site_keywords">
                    <?php echo isset($rs['site_keywords'])?$rs['site_keywords']:'' ?>
                </textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="site_description">&nbsp;&nbsp;<span class="glyphicon glyphicon-list-alt" ></span>网站描述：</label>
                </div>
                <textarea name="site_description" class="form-control col-md-6" cols="60" rows="3" id="site_description">
                    <?php echo isset($rs['site_description'])?$rs['site_description']:'' ?>
                </textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="site_copyright">&nbsp;&nbsp;<span class="glyphicon glyphicon-certificate" ></span>底部版权信息<br>&nbsp;&nbsp;（支持html标记）：</label>
                </div>
                <textarea name="site_copyright" class="form-control col-md-6" cols="60" rows="3" id="site_copyright">
                    <?php echo isset($rs['site_copyright'])?$rs['site_copyright']:'' ?>
                </textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="company_name">&nbsp;&nbsp;<span class="glyphicon glyphicon-font" ></span>公司名称：</label>
                </div>
                <input id="company_name" name="company_name" class="form-control col-md-6"  type="text" size="40"
                       value="<?php echo isset($rs['company_name'])?$rs['company_name']:'' ?>" />
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="company_phone">&nbsp;&nbsp;<span class="glyphicon glyphicon-phone-alt" ></span>联系电话：</label>
                </div>
                <input id="company_phone" name="company_phone" class="form-control col-md-6"  type="text" size="40"
                       value="<?php echo isset($rs['company_phone'])?$rs['company_phone']:'' ?>" />
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="company_fax">&nbsp;&nbsp;<span class="glyphicon glyphicon-send" ></span>传真：</label>
                </div>
                <input id="company_fax" name="company_fax" class="form-control col-md-6"  type="text" size="40"
                       value="<?php echo isset($rs['company_fax'])?$rs['company_fax']:'' ?>" />
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="company_email">&nbsp;&nbsp;<span class="glyphicon glyphicon-envelope" ></span>电子邮箱：</label>
                </div>
                <input id="company_email" name="company_email" class="form-control col-md-6"  type="text" size="40"
                       value="<?php echo isset($rs['company_email'])?$rs['company_email']:'' ?>" />
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="company_email">&nbsp;&nbsp;<span class="glyphicon glyphicon-comment" ></span>微信：</label>
                </div>
                <input id="company_weixin" name="company_weixin" class="form-control col-md-6"  type="text" size="40"
                       value="<?php echo isset($rs['company_weixin'])?$rs['company_weixin']:'' ?>" />
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-append  col-md-2">
                    <label for="company_address">&nbsp;&nbsp;<span class="glyphicon glyphicon-map-marker" ></span>公司地址：</label>
                </div>
                <input id="company_address" name="company_address" class="form-control col-md-6"  type="text" size="40"
                       value="<?php echo isset($rs['company_address'])?$rs['company_address']:'' ?>" />
            </div>
        </div>
        <button type="submit" class="btn btn-secondary" style="margin-left:45%;margin-bottom:20px;">修&nbsp;&nbsp;&nbsp;&nbsp;改</button>
    </form>
</div>
</form>
</body>

</html>
<?php $dbh = null; ?>

