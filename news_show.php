<?php 
require_once('header.php');
 ?>
<style>
      .header{
        background-color:#000; 
    }
    .news_infos{
      color:#5b5b5b!important;
        font-weight:normal;
    }
    .news_infos h3{
        text-align: left!important;
        float: left!important;
        color: #000;
        font-weight: bold;
        font-size: 16px;
        border-left:2px solid red; 
    }
  .news_infos img{
    display: block;
    margin: 0 auto;
  }
</style>
<div class="mainChild">

    <div class="banner1" style="background:url(images/child-bg2.jpg) no-repeat center center;background-size:cover;"></div>
    <div class="cont">
        <div class="menu">
            <div class="decorate">
                <i></i>
                <b></b>
                <i></i>
            </div>
            <form>
            <ul class="main-menu">
                <li class="search fix"><button type="submit"></button><input type="text" placeholder="关键词"></li>
                <li class="red"><a href="#">最新资讯</a></li>
                <li><a href="#">新手指南</a></li>
            </ul>
            </form>
            </div>
        <div class="mainTxt fix">
            <div class="mainCont">
        <div class="blogitem">
          <article>
          <div class="leftbox">
            <div class="infos">
              <div class="newsview">
              <?php 
                $sql="select * from single where id='".$_GET['id']."'";
                $result=mysql_query($sql);
                $row=mysql_fetch_array($result);
                if($row>0){
              ?>
                <h2 class="intitle"><?=$row['title']?></h2>
                <hr style="width:70%; height:1.5px;border:none;" />
                <div class="news_infos">
                  <?=$row['content']?>
                </div>
              </div>
            </div>
            <div class="news_pl">
              <h2><a href="contact.php">我要留言</a></h2>
              <ul>
              </ul>
            </div>
          </div>
          <div class="rightbox">
            <div class="articl">
              <h2 class="ar_title"><?=$row['title']?></h2>
              <div class="avatar"> <img src="<?=$row['thumbnail']?>"> </div>
              <div class="ar_con">
                <p>来源：<?=$row['comefrom']?></p>
                <p>摘要：<?=$row['description']?></p>
                <p>关键词：<?=$row['keywords']?></p>
                <p>发表时间：<?=$row['pubdate']?></p>
                <p>阅读更多文章</p>

              </div>
              <?php 
            }else {
                ?>
                <div>
                    <div style="margin:0 auto;height:50px;">暂无记录！</div>
                </div>
                <?php
            }
                ?>
            </div>
            <div class="weixin">
              <h2 class="ar_title">关注我们公众号</h2>
              <ul>
                <img style="width:100px;height:100px;margin:0 auto;" src="/webe/admin/kindeditor/attached/image/20191224/20191224233645_37507.png">
              </ul>
            </div>
          </div>
        </article>
 </div>
            </div>
        </div>
        <?php 
            require_once('footer.php');
         ?>
    </div>
</div>
<script type="text/javascript">
    $(function(){
            $(".nav a").removeClass("select");
            $(".xinwen").addClass("select");
        });
        </script>
</body>