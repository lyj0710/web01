<?php 
require_once('header.php');
 ?>
 <style>
    .header{
        background-color:#000;

    }
   
    .description{
        color:#5b5b5b!important;
    }
    .text img{
        display:block;
        margin:0 auto;
    }
    .content img{
        width:500px;
        height:500px;
        display:block;
        margin:0 auto;
    }
    .content{
        color:#5b5b5b!important;
    }
    .banner{
        -webkit-filter: grayscale(0%);
        -moz-filter: grayscale(0%);
        -ms-filter: grayscale(0%);
        -o-filter: grayscale(0%);
        filter: grayscale(0%);
        filter: gray;
    }
 </style>
 <link  rel="stylesheet" href="css/pinglun.css" />
<div class="mainChild">
    <div class="banner" style="background:url(images/child-bg.jpg) no-repeat center center;background-size:cover;"></div>
    <div class="title">
        <?php 
            $sql="select * from clothes where id='".$_GET['id']."'";
            $result=mysql_query($sql);
            $row=mysql_fetch_array($result);
            if($row>0){
            ?>
        <h1><?=$row['title']?>的介绍</h1>
        <h2></h2>
    </div>
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
        <h2 class="title"><a href="/"><h2></h2></a></h2>
        <ul class="text">
          <p class="description"><?=$row['description']?></p>
           <p class="textimg"><img src="<?=$row['thumbnail']?>"></p>
           <div class="content">
                <p><?=$row['content']?></p>
          </div>
        </ul>
        <?php 
            }else {
                ?>
                <div>
                    <div style="margin:0 auto;height:50px;">暂无记录！</div>
                </div>
                <?php
            }
                ?>
        <div class="textfoot">
          <a class="note-top-add" onclick="return false">评论</a><a href="/">转载</a>
        </div>
        <div class="pinglun" style="width:100%;">
            <div class="comment js-note-add" style="display:none;">
            
            <h4>请写下你的评论</h4>

            
            <form class="content" action="clo_comment_add.php?id=<?=$row['id']?>" method="post">
                <div class="cont-box">
                    <textarea class="text" name="content" placeholder="请输入..."></textarea>
                </div>
                <div class="tools-box">
                    <div class="operator-box-btn">
                    <span class="face-icon"  >☺</span>
                    <!-- <span class="img-icon">▧</span> -->
                    </div>
                    <div class="submit-btn">
                    <input type="submit" onClick="check()" value="提交评论" />
                    </div>
                    <div class="cancel">
                <!-- <a class="note-edit-cancel" onclick="return false" title="">取消</a> -->
                <button class="note-edit-cancel" type="button">取消</button>
            </div>
                </div>
            </form>
            
            </div>
        <div id="info-show">
            <ul>
            <?php 
                //记录的总条数
                    $total_num=$dbh->query("select id_art from clo_comments where id_art ='".$_GET['id']."' ")->rowCount();
                //设置每页显示的记录数
                    $pagesize=6;
                //计算总页数
                    $page_num=ceil($total_num/$pagesize);
                //设置页数
                    $page=isset($_GET['page'])?$_GET['page']:1;
                        if($page<1 || $page==''){
                            $page=1;
                        }
                        if($page>$page_num){
                            $page=$page_num;
                        }
                    //计算记录的偏移量
                         $offset=$pagesize*($page-1);
                    //上一页、下一页
                        $prepage=($page<>1)?$page-1:$page;
                        $nextpage=($page<>$page_num)?$page+1:$page;
                    //读取指定的记录数
                    $sql="select * from clo_comments where id_art ='".$_GET['id']."' order by id desc limit $offset,$pagesize";
                    $rows = $dbh->query($sql);
                        if($total_num>0){
                            foreach($rows as $row){
                    ?>
                <li>
                    <div class="head-face">
                        <img src="images/weidingyi.png" / >
                    </div>
                    <div class="reply-cont">
                        <p class="username"><span style="color:#000;font-weight:bold;">用户:</span><?=$row['username']?></p>
                        <p class="comment-body"><?=$row['content']?></p>
                        <p class="comment-footer"><?=$row['pubdate']?>　回复</p>
                    </div>
                </li>
                <?php 
                    }
                        }else {
                ?>
                <li style="text-align:center;">暂无评论。</li>
                <?php
            }
                ?>         
            </ul>
        </div>
        </div>
      </article>
    </div>
 </div>
            </div>
        </div>  
    </div>
</body>
<script type="text/javascript" src="js/sinaFaceAndEffec.js"></script>
<script type="text/javascript">
    $(function(){
            $(".nav a").removeClass("select");
            $(".clothes").addClass("select");
        });
    // 绑定表情
    $('.face-icon').SinaEmotion($('.text'));
    /* 添加按钮 */
    $(".note-top-add").click(function(){
        var flag = $(".loggedin").text();
        if (!flag) {
            alert("请先登录");
        }else{
            $(".js-note-add").fadeIn(200);
    }
});
    </script>
</html>