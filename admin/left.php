<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左侧导航</title>
<head>
<link href="css/left.css" rel="stylesheet">

<style>
	body{
		margin: 0;
		padding: 0;
	}
	.glyphicon{
		color:#fff;
		margin-right:10px; 
	}
</style>
</head>

<body id="bg">

<div class="container">  
	<div class="leftsidebar_box">
		<div class="line">
			<span class="glyphicon glyphicon-home"></span><a class="index_link" href="right.php" target="mainFrame">系统首页</a> | <a class="index_link" href="../" target="_blank">网站首页</a>
		</div>
		<dl class="system_log">
			<dt ><span class="glyphicon glyphicon-cog"></span>网站基本配置<img src="images/left/select_xl01.png"></dt>
			<dd class="first_dd"><a href="config.php" target="mainFrame">设置网站信息</a></dd>
		</dl>
	
		<dl class="custom">
			<dt ><span class="glyphicon glyphicon-user" ></span>管理员管理<img src="images/left/select_xl01.png"></dt>
			<dd class="first_dd"><a href="admin_add.php" target="mainFrame">添加管理员</a></dd>
			<dd><a href="admin_list.php" target="mainFrame">管理员列表</a></dd>
		</dl>
	
		<dl class="channel">
			<dt><span class="glyphicon glyphicon-file" ></span>新闻管理<img src="images/left/select_xl01.png"></dt>
			<dd class="first_dd"><a href="single_add.php" target="mainFrame">添加新闻</a></dd>
			<dd><a href="single_list.php" target="mainFrame">新闻列表</a></dd>
			
		</dl>
	
		<dl class="app">
			<dt ><span class="glyphicon glyphicon-book" ></span>文章管理<img src="images/left/select_xl01.png"></dt>
			<dd class="first_dd"><a href="article_add.php" target="mainFrame">添加文章</a></dd>
			<dd><a href="article_list.php" target="mainFrame">单页列表</a></dd>
		</dl>
	
		<dl class="cloud">
			<dt><span class="glyphicon glyphicon-shopping-cart" ></span>产品管理<img src="images/left/select_xl01.png"></dt>
			<dd class="first_dd"><a href="produce_add.php" target="mainFrame">添加<span style="color:red">配饰</span></a></dd>
			<dd class="first_dd"><a href="clothes_add.php" target="mainFrame">添加<span style="color:blue">服装</span></a></dd>
			<dd><a href="produce_list.php" target="mainFrame"><span style="color:red">配饰</span>列表</a></dd>
			<dd><a href="clothes_list.php" target="mainFrame"><span style="color:blue">服装</span>列表</a></dd>
		</dl>
	
		<dl class="syetem_management">
			<dt><span class="glyphicon glyphicon-info-sign" ></span>留言管理<img src="images/left/select_xl01.png"></dt>
			<dd class="first_dd"><a href="guestbook.php" target="mainFrame">留言列表</a></dd>
		</dl>
	
		<dl class="source">
			<dt><span class="glyphicon glyphicon-picture" ></span>焦点幻灯管理<img src="images/left/select_xl01.png"></dt>
			<dd class="first_dd"><a href="slide_add.php" target="mainFrame">添加焦点幻灯</a></dd>
			<dd><a href="slide_list.php" target="mainFrame">焦点幻灯列表</a></dd>
		</dl>
	
		<dl class="statistics">
			<dt><span class="glyphicon glyphicon-comment" ></span>QQ客服管理<img src="images/left/select_xl01.png"></dt>
			<dd class="first_dd"><a href="qq_add.php" target="mainFrame">添加客服</a></dd>
			<dd><a href="qq_list.php" target="mainFrame">客服列表</a></dd>
		</dl>

		<dl class="statistics">
			<dt><span class="glyphicon glyphicon-link" ></span>友情链接管理<img src="images/left/select_xl01.png"></dt>
			<dd class="first_dd"><a href="friend_add.php" target="mainFrame">添加友情链接</a></dd>
			<dd><a href="friend_list.php" target="mainFrame">友情链接列表</a></dd>
		</dl>

		<dl class="statistics">
			<dt><span class="glyphicon glyphicon-off" ></span>退出系统<img src="images/left/select_xl01.png"></dt>
			<dd class="first_dd"><a href="loginout.php" target="mainFrame">退出</a></dd>
		</dl>
	
	</div>

</div>

<script src="js/jquery.min.js"></script>
<script type="text/javascript">
$(".leftsidebar_box dt").css({"background-color":"rgba(39,39,39,0.5)"});
$(".leftsidebar_box dt img").attr("src","images/left/select_xl01.png");
$(function(){
	$(".leftsidebar_box dd").hide();
	$(".leftsidebar_box dt").click(function(){
		$(".leftsidebar_box dt").css({"background-color":"rgba(39,39,39,0.5)"})
		$(this).css({"background-color": "rgba(89,88,88,0.5)"});
		$(this).parent().find('dd').removeClass("menu_chioce");
		$(".leftsidebar_box dt img").attr("src","images/left/select_xl01.png");
		$(this).parent().find('img').attr("src","images/left/select_xl.png");
		$(".menu_chioce").slideUp(); 
		$(this).parent().find('dd').slideToggle();
		$(this).parent().find('dd').addClass("menu_chioce");
	});
})
</script>


</body>
</html>
