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
        <h1>服装展示</h1>
        <h2>A costume display</h2>
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
                <li class="red"><a href="#">服装展示</a></li>
                <li><a href="#">服装搭配</a></li>
                <li><a href="#">汉服文化</a></li>
                <li><a href="#">服装制作</a></li>
                <li><a href="#">汉服传承</a></li>
                <li><a href="#">服装选购</a></li>
                <li><a href="#">在线留言</a></li>
            </ul>
            </form>
        </div>
    	<div class="mainTxt fix">
        	<div class="mainCont">
            	<div>
                    <b></b>
                    <h1></h1>
                    <div class="txt">
                      	<ul class="picBox">
                            <?php 
                             //记录的总条数
                            $total_num=$dbh->query("select id from clothes")->rowCount();
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
                            $sql="select * from clothes order by id desc limit $offset,$pagesize";
                            $rows = $dbh->query($sql);
                            if($total_num>0){
                                foreach($rows as $row){
                                    ?>
                                        <li>
                                            <a href="clothes_show.php?id=<?php echo $row['id'] ?>">
                                            <img src="<?=$row['thumbnail']?>">
                                            <div class="pic-txt">
                                                 <h2><?=$row['title']?></h2>
                                                <p><?=$row['description']?></p>
                                            </div>
                                            </a>
                                        </li>
                                        <?php 
                                            }
                                            }else {
                ?>
                <div>
                    <div style="margin:0 auto;height:50px;">暂无记录！</div>
                </div>
                <?php
            }
                ?>         
                        </ul>
                    </div>
                    <ul class="paging">
                        <li><a href="?page=1">首页</a>&nbsp;&nbsp;</li>
                        <li><a href="?page=<?=$prepage?>">上一页</a>&nbsp;&nbsp;</li>
                        <li><a href="?page=<?=$page_num?>" style="pointer-events: none;"><?=$page?>/<?=$page_num?>&nbsp;&nbsp;</a></li>
                        <li><a href="?page=<?=$nextpage?>">下一页</a>&nbsp;&nbsp;</li>
                        <li><a href="?page=<?=$page_num?>">尾页</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php 
            require_once('footer.php');
        ?> 
    </div>
</div>
</body>
<script type="text/javascript">
    $(function(){
            $(".nav a").removeClass("select");
            $(".clothes").addClass("select");
        });
    </script>
</html>
