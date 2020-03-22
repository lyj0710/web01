<!-- 引入数据库文件 -->
<?php 
require_once('inc/conn.php');
require_once('inc/conn_pdo.php');
require_once('inc/conn_mysqli.php');
if (!session_id()) {
    session_start();
}
$sql_config="select * from config";
$result_config=mysql_query($sql_config);
$config=mysql_fetch_array($result_config);
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1">
<!--控制视口宽度，让页面以1:1比例渲染页面-->
<!-- 页面标题 -->
<title><?=$config['site_title'] ?></title>
<meta name="keywords" content="<?=$config['site_keywords']?>">
<meta name="description" content="<?=$config['site_description']?>">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/aos.css" rel="stylesheet" type="text/css">
<link href="css/kefu.css" type="text/css" rel="stylesheet" />
<link href="css/child.css" rel="stylesheet" type="text/css">
<link href="css/ar.css" rel="stylesheet">
<link href="css/cultural.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/sinaFaceAndEffec.css" />
<!-- <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.superslide.2.1.1.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript" src="js/me.js"></script>
<script type="text/javascript" src="js/aos.js"></script>

<style>
    .user{
        width:30px;
        height:30px;
        border: 3px solid #bc1717;
        box-sizing: border-box;
        border-radius: 50%;
        margin-right: 5px;
        display: inline-block;
    }
    .login,.logout{
        color: #fff;
        margin-left:-40px;
        margin-right:-10px;  
    }
</style>
</head>

<body>
<div class="header fix">
	<a class="logo" href="index.php"><img src="<?=$config['site_logo']?>"></a>
     <div class="menu-box"><img src="picture/menu-1.png"></div>
    <ul class="nav fix">
    	<li><a href="index.php" class="index select" >首页</a></li>
        <li >
        	<a href="article.php" class="about">汉服知识</a>
        </li>
        <li ><a href="produce_list.php" class="produce">服装配饰</a></li>
        <li ><a href="news_list.php" class="xinwen">新闻资讯</a></li>
        <li ><a href="clothes_list.php" class="clothes">服装展示</a></li>
        <li ><a href="contact.php" class="lianxi">联系我们</a></li>
        <!-- <li><a href="login.php">登录/注册</a></li> -->
        <li><div class="login">
                <?php if(empty($_SESSION['login_user_name'])):
                    ?>
                    <a href="login.php"><span>登录/注册</span></a>
                    <?php else: ?>
                    <img src="images/weidingyi2.jpg" class="user" alt="" title="这是陆家健"><strong><?php echo $_SESSION['login_user_name']?></strong></div></li>
        <li><div class="logout"><a href="logout.php">退出</a></div></li>
                    <?php endif; ?>
                
    </ul>
</div>


<div class="black-box">
    <div class="nav-main">
        <div class="nav-box">
            <div class="nav-ce">
                <ul class="nav-ul">
                    <li><a href="index.php"><span>首页</span></a></li>
                    <li><a href="article.php"><span>汉服知识</span></a></li>
                    <li><a href="product_list.php"><span>服装配饰</span></a></li>
                    <li><a href="news_list.php"><span>新闻资讯</span></a></li>
                    <li><a href="clothes_list.php"><span>服装展示</span></a></li>
                    <li><a href="contact.php"><span>联系我们</span></a></li>
                    <!-- <li><a href="login.php"><span>登录/注册</span></a></li> -->
                    <li><div class="login">
                <?php if(empty($_SESSION['login_user_name'])): ?>
                    <a href="login.php"><span>登录/注册</span></a>
                    <?php else: ?>
                    欢迎您，<img src="images/weidingyi2.jpg" class="user" alt="" title="这是陆家健"><strong class="loggedin"><?php echo $_SESSION['login_user_name']?></strong><a href="logout.php">退出</a>
                    <?php endif; ?>
                </div></li>
                </ul>
            </div>
            <div class="nav-slide">
                <div class="nav-slide-o"></div>
                <div class="nav-slide-o">
                    <ul>
                        <li><a href="#"><span>汉服简介</span>
                        	<ul class="child-menu">
                            	<li><a href="#"><span>汉服知识三级</span></a></li>
                            </ul>
                        </a></li>
                        <li><a href="#"><span>汉服制作</span></a></li>
                    </ul>
                </div>
                <div class="nav-slide-o"></div>
                <div class="nav-slide-o">
                    <ul>
                        <li><a href="#"><span>汉服简介</span></a></li>
                        <li><a href="#"><span>汉服制作</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
