<?php 
require_once('header.php');
 ?>

<div class="main">
    <div class="flexslider">
        <ul class="slides">
        <?php 
            $sql_silde="select * from slide order by orderid asc";
            $result_slide=mysql_query($sql_silde);
            while($row_slide=mysql_fetch_array($result_slide)){
         ?>
            <li style="background: url('<?=$row_slide['thumbnail']?>') no-repeat center center; background-size: cover;"><a href="<?=$row_slide['link']?>" target="_blank"></a></li>
            <?php 
                }
             ?>
        </ul>
    </div>
    <script src='js/snowflakes.min.js'></script>
    <script src="js/backgroup.js"></script>
    <div class="case">
    	<div id="particles-js" class="particles"></div>
        <div class="case-box">
        	<div class="title" aos="fade-up">
            	<h1>汉服展示</h1>

            </div>
           	<div data-setting='{
                                "width":1000,
                                "height":450,
                                "posterWidth":450,
                                "posterHeight":450,
                                "scale":0.8,
                                "autoPlay":true,
                                "delay":2000,
                                "speed":300,
                                "verticalAlign":"middle"
                                }'  aos="fade-down" aos-delay="1500" class="pictureSlider poster-main" id="carousel" >
                <div class="poster-btn poster-prev-btn"></div>
                <ul class="poster-list">
                    <li class="poster-item">
                    	<a href="#">
                        	<img src="picture/xiezhen0.jpg">
                            <div class="caseTxt">
                            	<h1>汉服写真</h1>
                                <div class="linkIcon"><img src="picture/link.png"></div>
                            </div>
                        </a>
                    </li>
                    <li class="poster-item">
                    	<a href="#">
                        	<img src="picture/xiezhen.jpg">
                            <div class="caseTxt">
                            	<h1>汉服写真</h1>
                                <div class="linkIcon"><img src="picture/link.png"></div>
                            </div>
                        </a>
                    </li>
                    <li class="poster-item">
                    	<a href="#">
                        	<img src="picture/xiezhen2.jpg">
                            <div class="caseTxt">
                            	<h1>汉服写真</h1>
                                <div class="linkIcon"><img src="picture/link.png"></div>
                            </div>
                        </a>
                    </li>
                    <li class="poster-item">
                    	<a href="#">
                        	<img src="picture/xiezhen3.jpg">
                            <div class="caseTxt">
                            	<h1>汉服写真</h1>
                                <div class="linkIcon"><img src="picture/link.png"></div>
                            </div>
                        </a>
                    </li>
                     <li class="poster-item">
                    	<a href="#">
                        	<img src="picture/xiezhen4.jpg">
                            <div class="caseTxt">
                            	<h1>汉服写真</h1>
                                <div class="linkIcon"><img src="picture/link.png"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="poster-btn poster-next-btn"></div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="abImg-box" aos="fade-right" aos-duration="1000"><img src="picture/bg-2.jpeg"></div>
        <div class="abTxt-box" aos="fade-left" aos-duration="1000">
        	<h1 class="title" aos="fade-left" aos-duration="1000" aos-delay="2000"><?=$config['site_title'] ?><span>ABOUT US</span></h1>
        	<div class="bg-box" aos="fade-left" aos-duration="1000" aos-delay="2000">
                <div class="abTxt"><?=$config['site_description'] ?></div>
                <a href="about.html" class="more"><img src="picture/more-1.png">查看更多</a>
            </div>
        </div>
        <div class="pos" aos="zoom-in">
        	<i></i>
            <i></i>
            <hr id="line-1">
            <hr id="line-2">
            <hr id="line-3">
            <hr id="line-4">
        </div>
    </div>
    <div class="product">
        <div class="title" aos="fade-up-right">
            <h1>汉服摄影</h1>

        </div>
        <div class="pic-scoll">
        	<div class="hd" aos="fade-up-right">
            	<a class="next"></a>
                <a class="prev"></a>
            </div>
        	<div class="bd" aos="fade-down" aos-delay="1000">
            	<ul class="pic-list">
                	<li>
                    	<div class="item1">
                            <a href="product.html">
                                <img src="picture/copy_0.jpg">
                                <div class="pic-txt">
                                    <h1>汉服形制——襕衫</h1>
                                    <p>襕衫[lán shān]是汉服形制款式之一，始现于唐，兴于宋明，古时多为士人所服。因其于衫下施横襕为裳，故称“襕衫”。是一种裳下摆接一横襕的男人长衫。多为宋明时期学子所穿着。</p>
                                </div>
                            </a>
                        </div>
                        <div class="item1">
                            <a href="product.html">
                                <img src="picture/copy_2.jpg">
                                <div class="pic-txt">
                                    <h1>交领襦裙</h1>
                                    <p>襦裙是汉服的一种，是汉服中常见的服饰。交领襦裙是其中一类，其特点是上襦为交领。交领襦裙在宋代颇为常见。</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                    	<div class="item2">
                            <a href="product.html">
                                <img src="picture/copy_17.jpg">
                                <div class="pic-txt">
                                    <h1>圆领袍</h1>
                                    <p>圆领袍，又称上领袍，是东亚（中国，日本，朝鲜）传统服饰的常见款式之一。溯其由传人以至兴盛，由军用以至民服，历史悠长，变化复杂，圆领亦称团领，实为无领型领式。衣领形似圆形，内覆硬衬，领口钉有纽扣。圆领袍是圆领子的窄袖袍，据引《唐书－舆服志》记载，天子的常服有穿赤黄袍杉，戴折上巾，系九环带，穿六合靴。</p>
                                </div>
                            </a>
                        </div>
                        <div class="item3">
                            <a href="product.html">
                                <img src="picture/copy_1.jpg">
                                <div class="pic-txt">
                                    <h1>对襟半臂襦裙</h1>
                                    <p>襦裙是中国古代汉族人民的一种传统服饰，而对襟襦裙则是襦裙的一类，其上襦为直领，衣襟呈对称状，故称对襟襦裙</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                    	<div class="item1">
                            <a href="product.html">
                                <img src="picture/copy_3.jpg">
                                <div class="pic-txt">
                                    <h1>大袄</h1>
                                    <p>大袄是一件清朝的文物，衣袖缘及托领滚边用石青缎绣串枝花蝶纹，绛色缎挽袖绣花蝶，通身绣五彩牡丹加兰花蝴蝶纹，牡丹采用打籽绣，极其精美艳丽。</p>
                                </div>
                            </a>
                        </div>
                        <div class="item1">
                            <a href="product.html">
                                <img src="picture/copy_4.jpg">
                                <div class="pic-txt">
                                    <h1>对襟直领</h1>
                                    <p>“直领”本是衣领的样式。而尹湾二号汉墓木牍文字有“直领一领”，说明“直领”也用作服装的名称，则“直领”也为汉时女服。其样式与男服中的“方领”相似。</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                    	<div class="item3">
                            <a href="product.html">
                                <img src="picture/copy_5.jpg">
                                <div class="pic-txt">
                                    <h1>齐胸襦裙</h1>
                                    <p>齐胸襦裙是对隋唐五代时期特有的一种女子襦裙装的称呼。齐胸襦裙是汉民族传统服饰的的一种，汉晋以来裙子的裙腰束于腰上，而隋唐五代时期裙子的裙腰束得更高，很多都在胸上，一些服装史上多称之为高腰襦裙，根据现在人们对它的考证，一般改称之为齐胸襦裙，齐胸襦裙至今没有服装文物出土。齐胸襦裙属于早期复原错误的称呼，正确的叫法应为齐胸衫裙。</p>
                                </div>
                            </a>
                        </div>
                        <div class="item2">
                            <a href="product.html">
                                <img src="picture/copy_6.jpg">
                                <div class="pic-txt">
                                    <h1>褙子</h1>
                                    <p>褙子，又名背子、绰子，绣䘿。是汉民族汉服传统服饰的一种。其样式以直领对襟为主，腋下开胯，腰间用勒帛系束，下长过膝，逐渐成为后世女子的一种常礼服。</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                    	<div class="item1">
                            <a href="product.html">
                                <img src="picture/copy_7.jpg">
                                <div class="pic-txt">
                                    <h1>斗篷</h1>
                                    <p>披用的外衣。又名"莲蓬衣"、"一口钟"、"一裹圆"。用以防风御寒。短者曾称帔，长者又称斗篷。其通常无袖，有袖外披一般为明制大袖褙子(也做披风解)。</p>
                                </div>
                            </a>
                        </div>
                        <div class="item1">
                            <a href="product.html">
                                <img src="picture/copy_8.jpg">
                                <div class="pic-txt">
                                    <h1>团扇</h1>
                                    <p>团扇又称宫扇、纨扇。中国传统工艺品及艺术品。是一种圆形有柄的扇子。团扇起源于中国。扇子最早出现在商代，用五光十色的野鸡毛制成，称之为“障扇”。当时，扇子不是用来扇风取凉，而是作为帝王外出巡视时遮阳挡风避沙之用。</p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pic-more">
            <a href="clothes_list.php">查看更多</a>
            <hr><i></i>
        </div>
    </div>
    <div class="news">
    	<div class="title" aos="fade-down" aos-duration="500">
            <h1>新闻资讯</h1>
            <h2>THE NEWS</h2>
        </div>
        <div class="news-list" id="news-slides">


        	<div class="news-slides" aos="fade-right" aos-duration="500" aos-delay="1500">
            	<b></b>
            	<div class="newsBtn">
                	<a class="next"></a>
					<a class="prev"></a>
                </div>
            	<div class="news-wrap">
                	<ul>
                    	<li>
                            <!-- <div class="date">
                                <h3>11-01</h3>
                                <h4>2019</h4>
                            </div> -->
                            <div class="news-describe" style="margin-left:19%;">
                                <a href="news_list.php">
                                    <div class="newsImg"><img src="picture/c1.jpg"></div>
                                    <div class="newsTxt">
                                        <h1>汉服里的中国文化</h1>
                                        <p>汉服，中国的衣裳，传承四千多年，是当之无愧的国粹。汉服，大袖长摆，褒衣博带，讲究天人合一。她以平淡自然、柔美流畅、含蓄委婉、典雅清新的气质，展现柔静安逸、娴雅超脱、泰然自若的民族性格，体现中国人平和自然、与世无争、宽厚仁爱的人生境界；她又以精裁细绣展现鲜活的中华民族的生命力和审美情趣。</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                       	<li>
                            <!-- <div class="date">
                                <h3>11-01</h3>
                                <h4>2019</h4>
                            </div> -->
                            <div class="news-describe" style="margin-left:19%;">
                                <a href="news_list.php">
                                    <div class="newsImg"><img src="picture/c2.jpg"></div>
                                    <div class="newsTxt">
                                        <h1>唤醒沉睡的记忆——汉服</h1>
                                        <p>《左传》记曰：“华夏，有章服之美谓之华，有礼仪之大故称夏。”在人们逐渐重视精神文化的今天，高耸的钢筋丛林中，开始有人发出了对衣冠上国的重新思考：那件曾以章纹标识的华美礼服，今在何方？</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="news-box" id="news-box" aos="fade-left" aos-duration="500" aos-delay="2500">
            	<b></b>
                <?php 
                     //记录的总条数
                    $total_num=$dbh->query("select id from single")->rowCount();
                    //设置每页显示的记录数
                    $pagesize=3;
                    //计算总页数
                    $page_num=ceil($total_num/$pagesize);
                    //设置页数
                    $page=isset($_GET['page'])?$_GET['page']:1;
                    //计算记录的偏移量
                    $offset=$pagesize*($page-1);
                    //读取指定的记录数
                    $sql="select * from single order by id desc limit $offset,$pagesize";
                    $rows = $dbh->query($sql);
                        if($total_num>0){
                            foreach($rows as $row){
                    ?>
            	<li>
                	<a href="news_show.php?id=<?php echo $row['id'] ?>" class="fix">
                    	<div class="date">
                        	<!-- <h3>11-01</h3> -->
                            <h4><?=$row['pubdate']?></h4>
                        </div>
                        <div class="news-describe">
                            <div class="newsTxt">
                                <h1><?=$row['title'] ?></h1>
                                <p><?=$row['description'] ?></p>
                            </div>
                        </div>
                    </a>
                </li>
                <?php
                    }
                }else{
                    ?>
                    <div>
                    <div style="margin:0 auto;height:50px;">暂无记录！</div>
                </div> 
                <?php
                }
                ?>
            </ul>
            <div class="pic-more news-more">
            	<a href="news_list.php">查看更多</a>
            	<hr><i></i>
       		</div>
       </div>
    </div>
    
    <!-- 代码部分begin -->
<div id="rightArrow"><a href="javascript:;" title="在线客户"></a></div>
<div id="floatDivBoxs">
  <div class="floatDtt">在线客服</div>
  <div class="floatShadow">
    <ul class="floatDqq">
    <?php 
        $sql_qq="select * from qq";
        $result_qq=mysql_query($sql_qq);
        while($row_qq=mysql_fetch_array($result_qq)){
           ?> 
      <li><a target="_blank" href="tencent://message/?uin=<?=$row_qq['qqnum']?>&Site=sc.chinaz.com&Menu=yes"><img src="images/qq.png" align="absmiddle"><?=$row_qq['title']?></a></li>
    <?php 
        }
     ?>
    </ul>
    <div class="floatDtxt">热线电话</div>
    <div class="floatDtel"><span style="color:#000;font-size:15px;margin-left:30px;"><?=$config['company_phone']?></span></div>
    <div class="floatImg"><img src="<?=$config['company_ewm']?>" width="100%"><span style="color:#000;">微信公众账号</span></div>
  </div>
  <!-- <div class="floatDbg"></div> -->
</div>

<script>
$(function(){
    var flag=0;
    $('#rightArrow').on("click",function(){
        if(flag==1){
            $("#floatDivBoxs").animate({right: '-175px'},300);
            $(this).animate({right: '-5px'},300);
            $(this).css('background-position','-50px 0');
            flag=0;
        }else{
            $("#floatDivBoxs").animate({right: '0'},300);
            $(this).animate({right: '170px'},300);
            $(this).css('background-position','0px 0');
            flag=1;
        }
    });
});
</script>
<!-- 代码部分end -->
    <div class="contact">
    	<div class="contact-box">
        	<div class="link" aos="fade-right" aos-duration="1000">
            	<h1>友情链接</h1>
                <div class="txtMarquee-top">
					<div class="bd">
                        <ul><?php  
                            $sql_friend="select * from friend";
                            $result_friend=mysql_query($sql_friend);
                            while($row_friend=mysql_fetch_array($result_friend)){
                            ?>
                            <li><a href="<?=$row_friend['url']?>" target="_blank" title="<?=$row_friend['title']?>"><?=$row_friend['title']?></a></li>
                            <?php 
                                }
                             ?>

                        </ul>
            		</div>
            	</div>
            </div>
            <div class="contactTxt" aos="fade-right" aos-duration="1000" aos-delay="2000">
            	<?=$config['company_name']?> <br/>

                联系人：陆总 <br/>

                电话：<?=$config['company_phone']?> <br/>

                地址：<?=$config['company_address']?><br/>

                邮箱：<?=$config['company_email']?> <br/>

                <div class="scan">
                	<img src="<?=$config['company_ewm']?>">
                </div>
            </div>
        </div>
    	<?php 
            require_once('footer.php');
         ?>
    </div>
</div>


<script type="text/javascript" src="js/particles.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script>
/* 粒子动画应用 */
	var count_particles, stats, update;
	stats = new Stats;
	stats.setMode(0);

	stats.domElement.style.position = 'absolute';
	stats.domElement.style.left = '0px';
	stats.domElement.style.top = '0px';
	document.body.appendChild(stats.domElement);
	count_particles = document.querySelector('.js-count-particles');
	update = function() {
		stats.begin();
		stats.end();
		if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
			count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
		}
		requestAnimationFrame(update);
	};
	requestAnimationFrame(update);
/*-- end --*/
</script>
<script>
    AOS.init({
    duration: 1000,
    easing: 'ease-out-back',
    delay: 1000,
});

//判断鼠标滚动距离
    $(window).scroll(function() {
        // 当滚动超过80时加背景
        if ($(this).scrollTop() >= 80) {
            $(".header").css("background","#000");
            var h;
            h = $(".about").offset().top;
            if($(this).scrollTop() > (h - 200)){
                $(".pos i").eq(0).animate({right:'100%'},3000);
                $(".pos i").eq(1).animate({right:0},3000);
            }
        }
        else{
            $(".header").css("background","none");
        }
    });

var newsHeight = document.getElementById("news-box").clientHeight;
document.getElementById("news-slides").style.height = newsHeight + "px";
</script>

</body>
</html>
