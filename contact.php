<?php 
require_once('header.php');
 ?>
<style>
      .header{
        background-color:#000; 
    }

</style>
<div class="mainChild">
	<div class="banner" style="background:url(images/child-bg.jpg) no-repeat center center;background-size:cover;"></div>
    <div class="title">
        <h1>联系我们</h1>
        <h2>CONTACT</h2>
    </div>
    <div class="cont" style="background:url(images/message.png) no-repeat top right; background-size:cover;">
    	<div class="menu">
        	<div class="decorate">
            	<i></i>
                <b></b>
                <i></i>
            </div>
            <form>
            <ul class="main-menu">
            	<li class="search fix"><button type="submit"></button><input type="text" placeholder="关键词"></li>
                <li class="red"><a href="#">在线留言</a></li>
                <li><a href="#">联系我们</a></li>
            </ul>
            </form>
        </div>
            <!-- 给我留言页面 -->
    <div class="message">
            <div class="slide">
            <ul>
          <li>
              <h4>给我留言</h4>
              <li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;如果您对我们的网站<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;有什么想说的或者<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;有什么建议请给我们留言哦！<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;如果有侵权请立即告知我们。
              </li>
          </li>      
            </ul>
            <div class="slide1"><img src="images/2.gif"></div>
            </div>

        <div class="right">
                    <div class="txt">
                        <form class="basic-grey" action="contact_check.php?act=add" method="post">
                            <h1>请留下您的联系方式</h1>
                    <label>
                        <span><span style="color:red;">*</span>标题：</span>
                            <input type="text" name="title" placeholder="请输入标题">
                        </label>
                        <label>
                        <span><span style="color:red;">*</span>称呼：</span>
                            <input type="text" name="name" placeholder="请输入姓名" onFocus="bgChange();">
                        </label>
                        <label>
                        <span>电话：</span>
                            <input type="text" name="tel" placeholder="请输入电话">
                        </label>
                        <label>
                        <span>QQ：</span>
                            <input type="text" name="qq" placeholder="请输入QQ">
                        </label>
                        <label>
                        <span><span style="color:red;">*</span>email：</span>
                            <input type="text" name="email" placeholder="请输入email">
                        </label>
                        <label>
                        <span><span style="color:red;">*</span>留言内容：</span>
                            <textarea rows="10" name="content" placeholder="请输入留言内容"></textarea>
                        </label>
                            <input type="submit" class="button" value="提交" />
                    </form>          
                    </div>
                </div>
            </div>
            <?php 
            require_once('footer.php');
         ?>
        </div>
        </div>
<script>
	window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"32"},"share":{}};
	with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];


     $(function(){
            $(".nav a").removeClass("select");
            $(".lianxi").addClass("select");
        });
</script>
</body>

</html>
