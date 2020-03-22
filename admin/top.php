<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title></title>
     <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        body{
            margin-left:0px;
            margin-top:0px;
            margin-right:0px;
            margin-bottom:0px;
            padding: 0;
        }
    </style>
</head>
<body>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" align="center">
            <tr style="background-color:#272727;height:80px;">
                <td width="36%" valign="middle" style="background:url('images/logo.png') no-repeat 10px center;
            font-size:30px;height:80px">&nbsp;</td>
            <!-- <td width="36%" style="font-size:25px;color:#fff;font-family:宋体;">华裾阁</td> -->
                <td width="36%" style="color:#fff;font-size:12px;">
                    欢迎您：<span style="color:#f30;font-weight:600;"><?=$_SESSION["admin_name"]?></span>
                    ,您现在登录的是<span style="text-shadow:2px 2px 5px red;">华裾阁</span>网站管理系统
                </td>
                <td width="64%" valign="bottom" align="right" style="color:#FFF;font-size:12px;">
                    当前时间：
                    <span id="time">
                        <script>
                            document.getElementById('time').innerHTML=new Date().toLocaleString()+'星期'+
                                '日一二三四五六'.charAt(new Date().getDay());
                            function setTime(){
                                document.getElementById('time').innerHTML=new Date().toLocaleString()+'星期'+
                                  '日一二三四五六'.charAt(new Date().getDay());
                            }
                            setInterval(setTime,1000);
                     </script>
                    </span>
                </td>
                <td width="64%" align="right" >
                    <input type="button" class="btn btn-danger" value="退出" onclick="window.parent.location.href='loginout.php'"
                    style="margin-top:-10px;height:30px;margin-right:5px;font-size:10px;"/>
                </td>
            </tr>
        </table>
</body>
</html>
