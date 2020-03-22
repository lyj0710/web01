-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 年 01 月 01 日 08:22
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `company`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) DEFAULT NULL COMMENT '管理员账号',
  `admin_pass` varchar(50) DEFAULT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'admin'),
(7, 'test', 'test');

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `title` varchar(50) DEFAULT NULL COMMENT '文章标题',
  `comefrom` varchar(20) DEFAULT NULL COMMENT '来源',
  `pubdate` varchar(20) DEFAULT NULL COMMENT '发布日期',
  `thumbnail` varchar(100) DEFAULT NULL COMMENT '缩略图',
  `keywords` text COMMENT '关键字',
  `description` text COMMENT '描述',
  `content` text COMMENT '内容',
  `posid` varchar(50) DEFAULT NULL COMMENT '推荐位',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `comefrom`, `pubdate`, `thumbnail`, `keywords`, `description`, `content`, `posid`) VALUES
(1, '这是第一篇文章', '本站', '2019年12月19日', '/webe/admin/kindeditor/attached/image/20191226/20191226102327_37476.jpg', '1', '这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章', '测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试', 'setindex'),
(2, '文章测试', '本站', '2019年12月26日', '/webe/admin/kindeditor/attached/image/20191226/20191226093909_29772.jpg', '测试', '文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试', '文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试初秋时节，约三两好友，燃灯、赏月、饮桂花酿……很是恰意。当然，若能穿上一套雅致风的汉服，与这美好光景最配不过。', 'setindex,settop'),
(3, '“汉服复兴”进行时，一些汉服小知识，汉服文化了解一下！', '梦仙游', '2019年12月26日', '/webe/admin/kindeditor/attached/image/20191230/20191230164701_98091.jpeg', '汉服文化', '汉服文化悠久漫长，关于汉服的那些传统知识，你知道多少？', '<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;第一次见到汉服，我就被它那飘逸摇曳的样子给深深吸引住了。微风吹拂，罗衣飘飘，远远望去，一袭青衣长袖，玲珑白衫如云，清清爽爽的气质无需冗余的修饰，惊醒那沉醉千年的美，显得更加仙气十足。\r\n</p>\r\n<p>\r\n	<img src="/webe/admin/kindeditor/attached/image/20191230/20191230164840_26737.jpeg" alt="" /> \r\n</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;而汉服文化发展至今，已有几千年的历史了，在经过了这么多年的沉淀后，变得更加韵味深远。而如今，随着汉服的兴起，发扬汉服文化更是成了我们这一代人非常重要的职责，汉服的经久不衰，也侧面印证了我们中国传统文化的经典及不可以替代性。今天子曰先来带大家了解一下关于汉服的小文化，让我们从历史的角度入手吧！\r\n</p>\r\n<h3>\r\n	汉服一词的来源：\r\n</h3>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;汉服，在中国有着悠久的文化历史，是当之无愧的国粹。据史料记载，最早出现汉服一词是在《汉书》中，一句“数来朝贺，乐汉衣服制度”，为我们留下了数千年的回忆。\r\n</p>\r\n<p>\r\n	<img src="/webe/admin/kindeditor/attached/image/20191230/20191230165054_51671.jpeg" alt="" /> \r\n</p>\r\n<h3>\r\n	汉服起源：\r\n</h3>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;关于汉服的历史记载也非常多，一些古籍观点认为汉服最初是由黄帝所制，但毕竟时代久远，远古时期的许多古籍都偏于神话性，所以这个观点不被大多数人所认同，也有人认为汉服的真正起源应该是由殷商王朝建立，包括冠服礼仪制度。\r\n</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;但汉服真正的传承应该是在秦朝，在秦朝时期，关于汉服的制度更加完善，就连初汉时期也沿袭了许多秦朝的制度；西汉时期深衣制是比较时兴的，蝉衣内包含中衣，深衣，包括衣服的样式裁剪都有自己的风格。\r\n</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;但不论是哪一个朝代，汉服的发展变迁一直都没有停止过，直到清代时期的“剃发易服”制下令之后，汉服才渐渐淡出了中国文化的历史舞台。\r\n</p>\r\n<p>\r\n	<img src="/webe/admin/kindeditor/attached/image/20191230/20191230165219_26537.jpeg" alt="" /> \r\n</p>\r\n<h3>\r\n	汉服结构：\r\n</h3>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;关于汉服的相关结构也非常繁多，比较常见的一种即为“交领右衽”，即左衣襟覆盖于右衣襟之上，这和中国传统认知的“以右为尊”有着非常密切的关系，这也是区别于其他少数民族服装的一大特点。\r\n</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其次较常见的结构是“褒衣广袖”，这类汉服的尺寸相对而言都是较为宽广的，袖子呈圆袂，象征传统思想“天圆地方”中的“天圆”，这种样式的汉服在唐朝的贵族群体中较为常见，到宋明时期便多为小袖。由于宽袖不便于劳作，所以许多庶民一类的普通民众穿着便多为小袖。\r\n</p>\r\n<p>\r\n	<img src="/webe/admin/kindeditor/attached/image/20191230/20191230165304_21090.jpeg" alt="" />\r\n</p>\r\n<h3>\r\n	汉服配饰：\r\n</h3>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;而关于汉服的一些相关配饰，和我们许多现代人一样，我们会有戴手链，项链等首饰的习惯，古代人也是如此，古代人佩戴较为常见的包括玉佩，香囊，革带等等。\r\n</p>\r\n<p>\r\n	<img src="/webe/admin/kindeditor/attached/image/20191230/20191230165326_14685.jpeg" alt="" /> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;民族文化博大精深，我们需要了解和学习的知识还有很多，虽然那些不断交替变幻的朝代已经离我们远去，但是它们给后代留下的影响却是永远存在的，甚至随着时代的进步还会越来越深。汉服复兴是我们，亦是整个民族的责任，我们每个人都应该不留余力地进行推广，使其传承！\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 'setindex,settop'),
(5, '汉服|被遗忘依旧的美', '与子同裳', '2019年12月30日', '/webe/admin/kindeditor/attached/image/20191230/20191230164128_61753.jpg', '了解汉服', '这千年前的美竟慢慢被世人遗忘', '<p style="text-indent:2em;">\r\n	许是历史悠久，时光漫长，汉服，这千年前的美竟慢慢被世人遗忘。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	但她，一直默默地等着，等待被重新发现的那一天。幸而，这千年的羁绊未被切断，世人发现了她，汉服得以重新出现在世人的眼前。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	轻轻拂去时光细尘，汉服之美，一如千年前灵动而飘逸。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	罗衣何飘飘，轻裾随风还。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	汉服，并不局限于汉朝，\r\n</p>\r\n<p style="text-indent:2em;">\r\n	它所指的是整个汉民族，是中国“衣冠上国”、“礼仪之邦”、“锦绣中华”的体现，是中国独有的美。\r\n</p>\r\n<p>\r\n	<img src="/webe/admin/kindeditor/attached/image/20191230/20191230164150_49792.jpg" alt="" /> \r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	但几年前，在路上见到穿汉服的人，大家会用异样的眼光打量他们，甚至惊异“现在年轻人怎么都奇装异服？”\r\n</p>\r\n<p style="text-indent:2em;">\r\n	而于此同时，日本街头常有和服的身影。当年学习我们制衣方法的国家，已在时光变迁中，形成自己的风格，并在定为国服后，在现代生活里继续传承。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	无论何时穿上街，都不会有人觉得奇怪。那时的中国，几乎是世界上唯一一个丢失自己传统服装的民族。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<img src="/webe/admin/kindeditor/attached/image/20191230/20191230164228_43884.jpg" alt="" /> \r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	沈从文先生离世前，最大的一个遗憾就是：“中国人不穿自己的衣服。”\r\n</p>\r\n<p style="text-indent:2em;">\r\n	的确，很多人不懂穿汉服有什么意义，更不理解为什么要宣传汉服。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	但古语有云：“中国有礼仪之大，故称夏；有服章之美，谓之华。”\r\n</p>\r\n<p style="text-indent:2em;">\r\n	宣传汉服，不仅仅因为那华丽的形式，更多的是为了了解背后的历史与传承，重建自己的文化自信。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>', '');

-- --------------------------------------------------------

--
-- 表的结构 `clothes`
--

CREATE TABLE IF NOT EXISTS `clothes` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '服装id',
  `title` varchar(50) NOT NULL COMMENT '服装名称',
  `comefrom` varchar(20) NOT NULL COMMENT '来自',
  `pubdate` varchar(20) NOT NULL COMMENT '日期',
  `thumbnail` varchar(100) NOT NULL COMMENT '缩略图',
  `keywords` text NOT NULL COMMENT '关键词',
  `description` text NOT NULL COMMENT '描述',
  `content` text NOT NULL COMMENT '内容',
  `posid` varchar(50) NOT NULL COMMENT 'posid',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `clothes`
--

INSERT INTO `clothes` (`id`, `title`, `comefrom`, `pubdate`, `thumbnail`, `keywords`, `description`, `content`, `posid`) VALUES
(1, '沃裙', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191225/20191225155754_85591.jpg', '裙', '袄裙，是对古代汉族女子上身穿袄，下身穿裙的统称。裙袄着装，从唐代开始就有衣物疏记录，一直到民国。现代一般谈论袄裙时候指的是明代的裙袄着装。有人对于袄裙定义为上衣穿裙子外为袄裙，实际是比较错误模糊的定义，因为有明一代，衫子也照样外穿，东晋十六国陶俑也显示此时代襦是穿于裙外的。所以不能以是否外穿定义袄裙，而应该以上身穿袄，下身穿裙的基本语境来定义袄裙一词。汉服中的"袄裙"一般指的是"明制袄裙"', '<p style="text-indent:2em;">\r\n	袄，有衬里的上衣。袄从唐代开始大量出现在衣物疏内，替代襦成为日常的冬季御寒衣物，从后世宋明清等时代来看，袄的制作上一般保持长袖通裁开衩的特征，而开衩处多在两侧，唐到金代有单独开衩在身后的，则另称开后袄子，而相对的开衩在两侧称呼缺胯袄子，两侧后面都开的也有壁画显示存在。而女子用之于裙子搭配的多是两侧开衩的袄子。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<div>\r\n	袄子按长短可分袄子（又称短袄）、长袄两类。一般判定方法是沿用古代对“襦”的长度判定法，即不过膝盖为袄，过膝为长袄。\r\n</div>\r\n<p style="text-indent:2em;">\r\n	<img src="/webe/admin/kindeditor/attached/image/20191226/20191226161554_18283.jpg" alt="" /> \r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	历代袄子按照领型可分为：交领大襟、对襟交领、圆领大襟、圆领对襟、竖领大襟、竖领对襟、方领对襟七类。这七类领型在明代都可以找到。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	历代搭配袄子的裙子品种繁多，如唐代采用破裙搭配衫子袄子，宋代采用百褶裙搭配衫子袄子。但因为袄裙一词现今多用于指代明女装\r\n</p>', 'setindex'),
(2, '交领襦裙', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191225/20191225155900_45274.jpg', '交领', '襦裙是汉服的一种，上身穿的短衣和下身束的裙子合称襦裙，是典型的"上衣下裳"衣制。上衣叫做"襦"，长度较短，一般长不过膝，汉晋时西北地区多为分裁并且有腰襕，侧不开叉的襦;下身则叫"裙"。"襦裙"其实是两种衣物的合称。襦裙出现在战国时期，兴起于魏晋南北朝。', '<p>\r\n	<span class="bjh-p">襦裙是汉服的一种，是汉服中常见的服饰。交领襦裙是其中一类，其特点是上襦为交领。交领襦裙在宋代颇为常见。</span> \r\n</p>\r\n<p>\r\n	<span class="bjh-p"> </span>\r\n</p>\r\n<p>\r\n	<span class="bjh-p">按风格分，可大致分为唐式交领襦裙，宋式交领襦裙、明式交领襦裙等。按穿着对象分，可分为男式交领襦裙、女式交领襦裙。</span> \r\n</p>\r\n<p>\r\n	<span class="bjh-p">交领襦裙，为襦裙的一类，其上襦为交领。交领襦裙在宋代颇为常见。</span> \r\n</p>\r\n<span class="bjh-p">按风格分，可大致分为唐式交领襦裙，宋式交领襦裙、明式交领襦裙等。按穿着对象分，可分为男式交领襦裙、女式交领襦裙。</span> \r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<span class="bjh-p"><img src="/webe/admin/kindeditor/attached/image/20191226/20191226161206_94858.jpg" alt="" /><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span class="bjh-p"><span class="bjh-p">与其它服装形制相比，襦裙有一个明显的特点:上衣短，下裙长，上下比例体现了黄金分割的要求，具有丰富的美学内涵。它们有一个共同的特点:平面裁剪，多缘边，绸带系结;上襦变化主要在领型及门襟上，下裙长至鞋面。大凡衣短则裙长，衣短至腰间，裙长至脚踝骨之下;衣长则裙阔，衣长时，长到臀至膝下，而裙露仅几寸，裙子不必显出特色。襦裙忌讳上下平分秋色，会显得呆板少变化</span><br />\r\n</span> \r\n</p>', 'setindex'),
(3, '齐胸襦裙', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191225/20191225160002_55195.jpeg', '齐胸襦裙', '齐胸襦裙是对隋唐五代时期特有的一种女子襦裙装的称呼。齐胸襦裙是汉民族传统服饰的的一种，汉晋以来裙子的裙腰束于腰上，而隋唐五代时期裙子的裙腰束得更高，很多都在胸上，一些服装史上多称之为高腰襦裙，根据现在人们对它的考证，一般改称之为齐胸襦裙。齐胸襦裙至今没有服装文物出土。齐胸襦裙属于早期复原错误的称呼，正确的叫法应为齐胸衫裙。', '<p>\r\n	齐胸襦裙是对南北朝特有的一种女子襦裙装的称呼，根据裙头的位置而得名，与高腰襦裙相区分，高腰襦裙系于胸部以下腰部以上，齐腰襦裙系于腰间，齐胸襦裙系于腋下。\r\n</p>\r\n<p>\r\n	在古代，一般女子的襦裙装裙子束的都不是很高，而南北朝到隋唐五代时期出现的一种裙腰束的非常高的襦裙，一些服装史上多称之为高腰襦裙，根据现在人们对它的考证，一般改称之为齐胸襦裙。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<div>\r\n	唐代国家统一，经济繁荣，社会风尚也比较开放，服饰款式也是群芳争艳，瑰丽多姿，大气飘逸又华丽绚烂，比如襦衫领口的类型就有：圆领、方领、直领和鸡心领等多种。\r\n</div>\r\n<div>\r\n	齐胸襦裙一般分为两种，一种是对襟齐胸襦裙，一种是交领齐胸襦裙，一般来说对襟齐胸襦裙的使用范围更加广一点。齐胸襦裙在唐朝仕女中非常盛行，现在保留的不少古画、出土文物都有它的踪迹。\r\n</div>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src="/webe/admin/kindeditor/attached/image/20191226/20191226160009_48526.jpg" alt="" /> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<div>\r\n	齐胸襦裙最早见于南北朝，经历了隋、唐、五代直到宋朝理学兴起才被历史淘汰，大约有1000年的历史。唐代之前出土的陶俑，或绘画，多见有背带的款式，发展到唐代开元年间变为用系带在腋下固定。\r\n</div>\r\n<div>\r\n	隋唐五代时，上衣为短襦，半臂（属于罩衫。半臂形制如同今短袖衫，因其袖子长度在长袖与裲裆之间，故称为半臂）与披肩（属于配饰）构成当时襦裙的重要组成部分。隋代，上襦又时兴小袖。唐代长期穿用小袖短襦和曳地长裙，但盛唐以后，贵族衣著又转向阔大拖沓。裙的式样用四幅连接缝合而成，上窄下宽，下垂至地，不施边缘。裙腰用绢条，两端缝有系带。这时上襦的领口变化多样，其中袒胸大袖衫一度流行，展示了盛唐思想解放的精神风貌。披肩从狭而长的披子演变而来，后来逐渐成为披之于双臂，舞之于前后的飘带，这是中国古代仕女的典型服饰，在盛唐及五代最为盛行。下裙面料以丝织品为主，以多幅为佳，裙腰上提，此时裙色鲜艳，多为深红、绛紫、月青、草绿等，其中以石榴红裙流行的时间最长，色彩多样，多中求异，让人眼花缭乱，目不暇接。如唐中宗的女儿安乐公主的百鸟裙，堪称中国织绣史上之名作；武则天时的响铃裙，将裙四角缀十二铃，行之随步，叮当作响，可谓千姿百态，美不胜收，与短襦和披肩相配一体，尽显盛唐女子雍容华贵的丰腴风韵，表现出极富诗意的美与韵律。\r\n</div>\r\n<p>\r\n	<br />\r\n</p>', 'setindex'),
(4, '直裾', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191226/20191226154552_64033.jpg', '直裾', '直裾，即襜褕，汉服的一种款式。语出《说文解字》，  是华夏衣冠体系中的一种，其短者谓之裋褕， 衣襟裾为方直，区别于曲裾。（有同袍习惯性的把直裾与直裾深衣划等号实际上是错误的。）裾就是指衣服的大襟。直裾下摆部份剪裁为垂直，衣裾在身侧或侧后方，没有缝在衣上的系带，由布质或皮革制的腰带固定。汉代以后，由于内衣的改进，盛行于先秦及西汉前期的绕襟曲裾已属多余，本着经济胜过美观的历史发展原则，至东汉以后，直裾逐渐普及，成为深衣的主要模式。', '<div>\r\n	<div>\r\n		直裾指汉服剪裁中前后大身部分的方形平直的布幅。<br />\r\n襜褕是典型的直裾袍。汉代字书《急就篇》：“襜褕，直裾禅衣。”而禅衣与同制深衣，衣裳不殊、裾幅通直。\r\n	</div>\r\n	<div>\r\n		和服的帷子也是直裾禅衣。直裾袍可分为交领直裾袍、圆领直裾袍、直衿直裾袍。直衿直裾袍即典型的宋代褙子。布幅斜裁则称为曲裾。直裾、曲裾相间则称为杂裾。\r\n	</div>\r\n	<div>\r\n		汉衣冠体系中的一种大身裁剪方式，特点是正直端方的方形衣身。衣服的大襟。以布而无缘，敝而紩之的直裾袍则叫做褴褛\r\n	</div>\r\n<br />\r\n</div>\r\n<p>\r\n	<img src="/webe/admin/kindeditor/attached/image/20191226/20191226154520_61199.jpg" alt="" /> \r\n</p>\r\n<p>\r\n	汉代的直裾男女均可穿著。这种服饰早在西汉时就已出现，但不能作为正式的礼服，外要配以穿着曲裾深衣。\r\n</p>\r\n<p>\r\n	早期的直裾袍通常是一种常服，<br />\r\n而非礼服。新莽末年三辅将士东迎更始的部队，见诸将都穿“妇人衣”诸于绣镼（也就是直裾的“襜褕”），以为非礼，故而大失所望，更有人因此亡去。待到洛阳见到时任司隶校尉的刘秀，见王莽制度尽革，汉家法度尽复，乃倾心于光武，更有前汉老吏泣下曰“不意今日复见汉官威仪”。到了东汉，襜褕出现在宴会等正式场合。东汉的许多画像石,画像砖和壁画中可常见罩住外衣的大袖襜褕的形象。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 'setindex'),
(5, '飞鱼服', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191225/20191225160400_97778.jpg', '飞鱼服', '明代赐服之一，飞鱼是一种纹理，有飞鱼纹的曳撒、直身、贴里都是不同款式的飞鱼服。飞鱼服上有四爪飞鱼纹“飞鱼类蟒，亦有二角。所谓飞鱼纹，是作蟒形而加鱼鳍鱼尾为稍异飞鱼类蟒，非真作飞鱼形”。\r\n是明代锦衣卫、大内太监朝日、夕月、耕耤、视牲所穿赐服，由云锦中的妆花罗、妆花纱、妆花绢制成，佩绣春刀，除此之外只有蒙皇帝恩赐，才可穿着，是明代仅次于蟒服的一种二品赐服。', '<p>\r\n	<br />\r\n</p>\r\n<div class="para">\r\n	飞鱼服是补色为飞鱼的袍服，飞鱼并不是所说的那种海鱼，而是一种近似龙首、鱼身、有翼的虚构形象。\r\n</div>\r\n<div class="para">\r\n	飞鱼类蟒，亦有二角。所谓飞鱼纹，是作蟒形而加鱼鳍鱼尾为稍异，非真作飞鱼形。《山海经·海外西经》：“龙鱼陵居在其北，状如狸（或曰龙鱼似狸一角，作鲤）。”因能飞，所以一名飞鱼，头如龙，鱼身一角，服式为衣分上下二截相连，下有分幅，二旁有襞积。飞鱼的神性是"眼之不畏雷" ，飞鱼与雷神存在着某种联系，它具有雷神的神性和神力。\r\n</div>\r\n<p>\r\n	飞鱼服是次于蟒袍的一种隆重服饰。至正德间，如武弁自参（将）游（击）以上，都得飞鱼服。嘉靖、隆庆间，这种服饰也送及六部大臣及出镇视师大帅等，有赏赐而服者。\r\n</p>\r\n<p>\r\n	<img src="/webe/admin/kindeditor/attached/image/20191226/20191226153924_20522.jpg" alt="" />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<div class="para">\r\n	张廷玉修的《明史》有提到，嘉靖年间的锦衣卫指挥使——张爵的墓志里有写“赐四兽麒麟服、銮带绣春刀、银鎁瓢方袋三事”，嘉靖帝巡幸承天，特命张爵“充前驱使事，—切机务悉倚毗焉，仍加食都指挥佥事俸。自发驾以至回銮，飞鱼蟒衣、帑金、厩马、酒饭之赐，及宣召面谕之优，不可枚举。”由此可见，飞鱼服绣春刀是皇帝赏赐的。\r\n</div>\r\n<div class="para">\r\n	明代史料里面提到了锦衣卫堂上官穿飞鱼服，不过“飞鱼服”是个大名称，凡是装饰有飞鱼纹样的衣服都叫飞鱼服，而纹样包括这样过肩式的、补子式的等等，衣服款式则各种都可以。\r\n</div>\r\n<div class="para">\r\n	明中期时制服的识别系统缺少监管，有人专门把飞鱼服穿得像蟒袍，于是朝廷严厉控制了多年，至明末奢华之风又起，人人都喜穿的华贵，对服饰的管制才放宽松。\r\n</div>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 'setindex'),
(6, '直缀', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191226/20191226150637_83081.jpg', '直缀', '直缀，又作直裰。系僧侣之法衣一种，即将偏衫与裙子合缀而成之僧服。我国唐代中世以来，即盛行于禅宗。日本法衣最早之形式即为直缀。关于直缀之起源，据《圣同三传通记糅钞》卷二十六载，唐代新吴百丈山慧海大智禅师始将偏衫与裙子上下连缀，而称之为直缀。或谓东晋佛图澄创制，然事实不详。《敕修百丈清规》卷五"直缀"条:"相传，前辈见僧有偏衫而无裙，有裙而无偏衫，遂合二衣为直缀。"', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	直裰起源于唐朝，是从宋朝开始就有的一种<span style="font-weight:700;">汉服</span>服饰。据宋朝人赵彦卫《云麓漫钞》谓：“古之中衣，即今僧寺行者直裰。”两宋时期的直裰多为僧侣穿着（少数文人也有穿着）。\r\n</div>\r\n<p style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	而到了明朝时期，直裰的款式发生变化，在文人、士大夫中流行。\r\n</p>\r\n<p style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<br />\r\n</p>\r\n<p style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	直裰是长衣而背之中缝直通到下面，所以称之为直掇，也叫直身的，也有说长衣而下面无襕的叫做直掇。\r\n</p>\r\n<p style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<img src="/webe/admin/kindeditor/attached/image/20191226/20191226120457_65343.jpg" alt="" /> \r\n</p>\r\n<p style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	道衣为道家之法服，但不是专指道士所着的服饰之称谓，凡一般文人士人也都着此。其形制是斜领交裾，四周有用黑色布为缘者，或用茶褐色为袍者则又称谓道袍。\r\n</p>\r\n<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">直裰也作“直掇”，早在宋代已经出现，一般以素布为之，对襟大袖，衣缘四周镶有黑边，最初多用作僧人和道士之服。如宋朝人赵彦卫《云麓漫钞》谓：“古之中衣，即今僧寺行者直掇。”苏辙在《答孔平仲惠蕉布诗》称：“更得双蕉缝直掇，都人浑作道人看。”从苏辙的诗句中，可知在当时的文人中，也有穿直裰的，只是在世人眼中，这种服装仍为僧侣之服。</span> \r\n<p>\r\n	<br />\r\n</p>', 'setindex'),
(7, '对襟半臂', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191225/20191225161057_72536.jpg', '对襟半臂', '半臂其形似似衫去其长袖，成为宽口短袖衣，其形制与衫齐长。交领、腰下接襕。男子半臂长及膝部。明代演变为褡护。 部分学者主张"半臂"为男子服饰的，因为唐代史料区分男子半臂和女子半袖。', '<p style="text-indent:2em;">\r\n	<span style="color:#333333;font-family:-apple-system, BlinkMacSystemFont, " font-size:17px;background-color:#ffffff;"="">唐代半臂面料多以锦<span style="color:#333333;font-family:-apple-system, BlinkMacSystemFont, " font-size:17px;background-color:#ffffff;"="">，穿在圆领袍衫里面，故称锦半臂。 隋唐时期的扬州生产半臂锦，是专供制作半臂的彩色纹锦。 半臂之襕通常为异色，并且自腰而下至膝，形似短裙，襕料则多是较柔软的绫<span style="color:#333333;font-family:-apple-system, BlinkMacSystemFont, " font-size:17px;background-color:#ffffff;"="">、绢。唐代衣物帐中提及半臂时常记录其襕，如"帛<span style="color:#333333;font-family:-apple-system, BlinkMacSystemFont, " font-size:17px;background-color:#ffffff;"="">绫半臂一，碧绫兰(襕)"(敦煌文书<span style="color:#333333;font-family:-apple-system, BlinkMacSystemFont, " font-size:17px;background-color:#ffffff;"="">《癸酉年<span style="color:#333333;font-family:-apple-system, BlinkMacSystemFont, " font-size:17px;background-color:#ffffff;"="">(793年)沙州莲台寺<span style="color:#333333;font-family:-apple-system, BlinkMacSystemFont, " font-size:17px;background-color:#ffffff;"="">诸家散施历状》)、"半臂一，表白地甲缬，里白絁<span style="color:#333333;font-family:-apple-system, BlinkMacSystemFont, " font-size:17px;background-color:#ffffff;"="">，襕并绪云间"(宝龟十一年(780年) 《西大寺资财流记帐·唐乐衣服具》，绪为带，云间为一种锦纹)。</span></span></span></span></span></span></span></span>\r\n</p>\r\n<p>\r\n	<span style="color:#333333;font-family:-apple-system, BlinkMacSystemFont, " font-size:17px;background-color:#ffffff;"=""><img src="/webe/admin/kindeditor/attached/image/20191226/20191226113700_37037.jpg" alt="" /></span>\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<span style="color:#333333;font-family:-apple-system, BlinkMacSystemFont, " font-size:17px;background-color:#ffffff;"=""></span>\r\n</p>\r\n<p style="text-indent:2em;">\r\n	沈从文在《中国古代服饰研究》中写到:"半臂又称半袖,是从魏晋以来上襦发展而出的一种无领(或翻领)、对襟(或套头)短外衣,它的特征是袖长及肘,身长及腰。"在中国隋唐时期，半臂有对襟、套头、翻领或无领式样，袖长齐肘，身长及腰，以小带子当胸结住。因领口宽大，穿时袒露上胸。多穿在衫襦之外。流行于隋代宫廷内，先为宫中内官、女史所服，唐代传至民间，历久不衰。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	唐代女装中极为常见的新式衣着。这是一种短袖的对襟上衣，没有纽袢，只在胸前用缀在衣襟上的带子系住。半臂的衣领宽大，胸部几乎都可以袒露出来。唐代妇女们穿用半臂时，有的把它罩在衫、裙的外面，有些像今日的短风衣一样。在唐代，半臂更为普及， 不仅男、女都可以穿用，而且进入宫廷常服的行列。唐代农民的服饰形制为缺骻衫、褐衣与裙、半臂与裙、短款襕衫。\r\n</p>\r\n<p>\r\n	<img src="/webe/admin/kindeditor/attached/image/20191226/20191226115012_48864.jpg" alt="" /> \r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	半臂的兴盛时期是在唐代前期，中期以后便有了显著的减少。主要原因是唐代前期的女装与后期有明显的不同。前期女装大多窄小细瘦，紧贴身体，袖子也细窄紧口，适合在外面套上半臂。唐代妇女爱穿窄瘦服装的风气，恐怕仍然是北朝<a href="https://m.baike.so.com/doc/6021833-6234830.html" target="_blank">胡服</a>流行和境外异国风俗的影响。 唐代妇女穿的胡服主要是袍衫和<a href="https://m.baike.so.com/doc/1304798-1379595.html" target="_blank">靴裤</a>。外着翻领对襟的窄袖长袍，或者穿圆领窄袖襕衫。下身穿长裤，足登靴鞋，腰束革带。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	①《事物纪原》云:"秦二世诏衫子上朝服如背子，其制短袖于衫，身于衫齐而大袖，俗名[䘿掖]或[绣䘿]，如今之半臂"\r\n</p>\r\n<p style="text-indent:2em;">\r\n	②《中华古今注》云:"隋大业末，炀帝宫人，百官母妻等绯罗蹙金凤背子，以为朝代及礼见宾客舅姑之长服也。"有云:"唐尚书上疏云:臣请中单加半臂以为得礼，其武官等诸服长衫，以别文武，诏从之。"\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>', 'setindex'),
(8, '褙子', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191225/20191225161329_93251.jpg', '褙子', '褙子，又名背子、绰子，绣䘿。是汉民族汉服传统服饰的一种。其样式以直领对襟为主，腋下开胯，腰间用勒帛系束，下长过膝，逐渐成为后世女子的一种常礼服。', '<p style="color:#666666;font-family:&quot;font-size:16px;background-color:#FFFFFF;">\r\n	宽袖褙子，只在衣襟上，以花边作装饰，并且领子一直通到下摆。窄袖褙子，则袖口及领子都有装饰花边，领子花边仅到胸部。\r\n</p>\r\n<p style="color:#666666;font-family:&quot;font-size:16px;background-color:#FFFFFF;">\r\n	宋代受程朱理学的影响，人们的审美观追求质朴，宋代男子的褙子常衬于公服内，很少外穿。女子的褙子则外穿，并成为典型的常服款式。\r\n</p>\r\n<p style="color:#666666;font-family:&quot;font-size:16px;background-color:#FFFFFF;">\r\n	“背子”，又名“绣?”，亦名“罩甲”，背子始创于秦，渐为庶民所采用。关于褙子的名称，宋代还有一种说法，认为褙子本是婢妾之服，因为婢妾一般都侍立于主妇的背后，故称‘背子’。婢妾穿腋下开胯的衣服，行走也较方便。今即世俗相承，由于背子束结、行动灵活自如，渐为武士所用，并与铠甲配合，成为军服，为历代军士兵卒所穿用，亦称“戎服”。\r\n</p>\r\n<p>\r\n	<img src="/webe/admin/kindeditor/attached/image/20191226/20191226112516_55428.jpg" alt="" />\r\n</p>\r\n<p>\r\n	<p style="color:#666666;font-family:&quot;font-size:16px;background-color:#FFFFFF;">\r\n		宋代的褙子为长袖、长衣身，腋下开胯，即衣服前后襟不缝合，而在腋下和背后缀有带子的样式。这腋下的双带本来可以把前后两片衣襟系住，可是宋代的褙子并不用它系结，而是垂挂着作装饰用，意义是模仿古代中单（内衣）交带的形式，表示“好古存旧”。穿褙子时，却在腰间用勒帛系住。宋代女子所穿褙子，初期短小，后来加长，发展为袖大于衫、长与裙齐。\r\n	</p>\r\n	<p style="color:#666666;font-family:&quot;font-size:16px;background-color:#FFFFFF;">\r\n		宋代褙子的领型有直领对襟式、斜领交襟式、盘领交襟式三种，以直领式为多。斜领和盘领二式只是在男子穿在公服里面时所穿，妇女都穿直领对襟式。\r\n	</p>\r\n	<p style="color:#666666;font-family:&quot;font-size:16px;background-color:#FFFFFF;">\r\n		明代妇女的服装，主要有衫、袄、霞帔、背子、比甲及裙子等。衣服的基本样式，大多仿自唐宋，一般都为右衽，恢复了汉族的习俗。其中霞帔、褙子、比甲为对襟，左右两侧开衩。成年妇女的服饰，随随各人的家境及身份的变化，有各种不同形制，普通妇女服饰比较朴实，主要有襦裙、褙子、袄衫、云肩及袍服等。\r\n	</p>\r\n	<p style="color:#666666;font-family:&quot;font-size:16px;background-color:#FFFFFF;">\r\n		<img src="/webe/admin/kindeditor/attached/image/20191226/20191226112629_36191.jpg" alt="" />\r\n	</p>\r\n	<p style="color:#666666;font-family:&quot;font-size:16px;background-color:#FFFFFF;">\r\n		<p style="color:#666666;font-family:&quot;font-size:16px;background-color:#FFFFFF;">\r\n			<strong>汉服褙子的形制：<br />\r\n</strong> 褙子是一种由半臂或中单演变而成的上衣。形如中单，但腋下两裾离异不连。宋代盛行多为直领对襟，不施袗钮，腋下开胯，腰间用勒帛系束，下长过膝。男女均可穿，多罩在其他衣服外面穿着。后世多有沿革。\r\n		</p>\r\n		<p style="color:#666666;font-family:&quot;font-size:16px;background-color:#FFFFFF;">\r\n			男子一般把褙子当做便服或衬在礼服里面的衣服来穿。而妇女则可以当做常服（公服）及次于大礼服的常礼服来穿。\r\n		</p>\r\n		<p style="color:#666666;font-family:&quot;font-size:16px;background-color:#FFFFFF;">\r\n			褙子一般作为女装，但实际上男女皆可服之，因使用和时间的不同，其形制变化甚多。宋代男子从皇帝，官吏、士人、商贾、仪卫等都穿。妇女从后、妃子、公主到一般妇女都穿。\r\n		</p>\r\n	</p>\r\n</p>', 'setindex'),
(9, '曲裾', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191226/20191226164403_28978.jpg', '曲裾', '曲裾是汉服的一种款式。按照《礼记》记载，深衣一大特点是“续衽钩边”，也就是说“这种服式的共同特点是都有一幅向后交掩的曲裾。”（孙机）。\r\n出乎意外的是，普通的短曲裾不是在膝前交叉，而是绕到背后，参考洛阳金村出土的银人像。\r\n古代深衣之裳计有十二幅，皆宽头在下，狭头在上，通称为衽，接续其衽而钩其旁边者为“曲裾', '<p style="text-indent:2em;">\r\n	曲裾，读音qūjū（音似“屈居”），可以直观理解为一种续衽绕襟的服装\r\n</p>\r\n<p style="text-indent:2em;">\r\n	曲裾深衣后片衣襟接长，加长后的衣襟形成三角，经过背后再绕至前襟，然后腰部缚以大带，可遮住三角衽片的末梢。这一状况可能就是古籍资料提到的“续衽钩边”。“衽”是衣襟。“续衽”就是将衣襟接长。“钩边”应该是形容绕襟的样式。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	曲裾出现，与汉族衣冠最初没有连裆的罩裤有关，下摆有了这样几重保护就符合理并合礼得多，因此，曲裾深衣在未发明袴的先秦至汉代较为流行。开始男女均可穿着。男子曲裾的下摆比较宽大，以便于行走；而女子的则稍显紧窄，从出土的战国、汉代壁画和俑人来看，很多女子曲裾下摆都呈现出“喇叭花”的样式。慢慢地，男子曲裾越来越少，曲裾作为女子衣装保留的时间相对长一些。直到东汉末至魏晋，女子深衣式微，襦裙始兴，曲裾深衣自然也几乎销声匿迹。后来漫漫的历史长河中，大行其道的女服则是襦裙。\r\n</p>\r\n<p>\r\n	<img src="/webe/admin/kindeditor/attached/image/20191226/20191226164005_52931.jpg" alt="" />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<span>在今天看来，曲裾深衣有着别样的风韵。</span>\r\n</p>\r\n<div>\r\n	汉代妇女的曲裾深衣 \r\n汉代曲裾深衣不仅男子可穿，同时也是女服中最为常见的一种服式，形象资料中有很多反映。这种服装通身紧窄，长可曳地，下摆一般呈喇叭状，行不露足。衣袖有宽窄两式，袖口大多镶边。衣领部分很有特色，通常用交领，领口很低，以便露出里衣。如穿几件衣服，每层领子必露于外，最多的达三层以上，时称“三重衣”。\r\n</div>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>', 'setindex');

-- --------------------------------------------------------

--
-- 表的结构 `clo_comments`
--

CREATE TABLE IF NOT EXISTS `clo_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '记录id',
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `id_art` int(11) NOT NULL COMMENT '文章id',
  `content` text COMMENT '评论内容',
  `pubdate` varchar(50) DEFAULT NULL COMMENT '评论日期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `clo_comments`
--

INSERT INTO `clo_comments` (`id`, `username`, `id_art`, `content`, `pubdate`) VALUES
(1, '123aa', 9, '真好看', '2020-01-01');

-- --------------------------------------------------------

--
-- 表的结构 `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(50) DEFAULT NULL COMMENT '网站标题',
  `site_url` varchar(50) DEFAULT NULL COMMENT '网站地址',
  `site_logo` varchar(100) DEFAULT NULL,
  `site_keywords` text COMMENT '网站关键字',
  `site_description` text COMMENT '网站描述',
  `site_copyright` varchar(100) DEFAULT NULL COMMENT '版权信息',
  `company_name` varchar(50) DEFAULT NULL COMMENT '公司名称',
  `company_phone` varchar(20) DEFAULT NULL COMMENT '公司联系电话',
  `company_fax` varchar(20) DEFAULT NULL,
  `company_email` varchar(30) DEFAULT NULL COMMENT '公司电子邮箱',
  `company_weixin` varchar(30) DEFAULT NULL COMMENT '微信',
  `company_ewm` varchar(100) DEFAULT NULL COMMENT '公司二维码',
  `company_address` varchar(50) DEFAULT NULL COMMENT '公司地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `config`
--

INSERT INTO `config` (`id`, `site_title`, `site_url`, `site_logo`, `site_keywords`, `site_description`, `site_copyright`, `company_name`, `company_phone`, `company_fax`, `company_email`, `company_weixin`, `company_ewm`, `company_address`) VALUES
(1, '华裾阁', 'localhost/web/index.php', '/webe/admin/kindeditor/attached/image/20191225/20191225152527_39660.png', 'huaju', '华裾阁是汉服设计品牌，拥有一群想象力丰富的年轻设计师，同样拥有汉服的独立设计，一直以高质量产品出名，主要制作汉服、唐装、绣花鞋、绣花棉、衬裙、雪纺带、仿真丝、改良汉服等等，拥有专业的服装设计和材料检验团队，以及优质的服务。对于汉服，我们是认真的。', '版权归人类的本质是鸽子精所有', '华裾阁', '400-88-888', '400-88-888', 'huajuge@163.com', '', '/webe/admin/kindeditor/attached/image/20191224/20191224233645_37507.png', '广东省广州市增城区中新镇风光路xxx号');

-- --------------------------------------------------------

--
-- 表的结构 `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) DEFAULT NULL COMMENT '标题',
  `url` varchar(50) DEFAULT NULL COMMENT '链接地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `friend`
--

INSERT INTO `friend` (`id`, `title`, `url`) VALUES
(3, '汉服荟', 'http://www.hanfuhui.com'),
(2, '爱汉服', 'http://www.aihanfu.com/'),
(4, '艾木朵', 'https://www.vvic.com/shop/22365'),
(5, '崋姿儀赏', 'https://www.vvic.com/shop/22365');

-- --------------------------------------------------------

--
-- 表的结构 `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL COMMENT '留言标题',
  `pubdate` varchar(50) DEFAULT NULL COMMENT '留言时间',
  `name` varchar(30) DEFAULT NULL COMMENT '称呼',
  `tel` varchar(20) DEFAULT NULL COMMENT '手机号码',
  `qq` varchar(15) CHARACTER SET utf32 DEFAULT NULL COMMENT 'qq',
  `email` varchar(30) DEFAULT NULL COMMENT '邮箱',
  `content` text COMMENT '留言内容',
  `deal` varchar(5) DEFAULT '否' COMMENT '是否处理',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `guestbook`
--

INSERT INTO `guestbook` (`id`, `title`, `pubdate`, `name`, `tel`, `qq`, `email`, `content`, `deal`) VALUES
(1, '这是一个测试', '2019-12-31', '测试人员', '123456789', '123456789', '1030969220@qq.com', '这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试', '否'),
(2, '这是一个测试', '2019-12-31', '测试人员', '123456789', '123456789', '1030969220@qq.com', '这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试这是一个测试', '否');

-- --------------------------------------------------------

--
-- 表的结构 `produce`
--

CREATE TABLE IF NOT EXISTS `produce` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `title` varchar(50) DEFAULT NULL COMMENT '产品标题',
  `comefrom` varchar(20) DEFAULT NULL COMMENT '来源',
  `pubdate` varchar(20) DEFAULT NULL COMMENT '发布日期',
  `thumbnail` varchar(100) DEFAULT NULL COMMENT '缩略图',
  `keywords` text COMMENT '关键字',
  `description` text COMMENT '描述',
  `content` text COMMENT '内容',
  `posid` varchar(50) DEFAULT NULL COMMENT '推荐位',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `produce`
--

INSERT INTO `produce` (`id`, `title`, `comefrom`, `pubdate`, `thumbnail`, `keywords`, `description`, `content`, `posid`) VALUES
(4, '胸饰', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191225/20191225115125_14586.jpeg', '胸针', '佩戴一枚胸针，常可产生画龙点睛的效果，尤其当衣服的设计比较简单或颜色比较朴素时，别上一枚色彩鲜艳的胸针，就会立即使整套装饰活泼起来，并具有动感。', '<p style="text-indent:2em;">\r\n	<ul>\r\n		<p>\r\n			胸饰:主体是胸针。现代社会中女性常用的装饰品之一，质地多为银制或白金，镶以宝石，将其别在衣襟上，彰显自己的美好身材或身份地位。\r\n		</p>\r\n		<p>\r\n			女士用的胸针多佩戴于西装或大衣的驳领上，或插于羊毛衫、衬衣、裙装的前胸某一部位。佩戴一枚胸针，常可产生画龙点睛的效果，尤其当衣服的设计比较简单或颜色比较朴素时，别上一枚色彩鲜艳的胸针，就会立即使整套装饰活泼起来，并具有动感。\r\n		</p>\r\n		<p>\r\n			胸饰的由来，最早可能是作为一种宗教象征及护身符而出现的。在我国，古代官员的胸前也常佩戴胸饰，其作用是做护身符，并象征权力和地位。后来一直发展到今天，胸饰的主要作用就是美化仪表。\r\n		</p>\r\n	</ul>\r\n</p>\r\n<p>\r\n	<img src="/webe/admin/kindeditor/attached/image/20191225/20191225215403_57595.jpg" alt="" /> \r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<ul>\r\n		<p>\r\n			目前流行的胸针，可分为大型胸针和小型胸针两大类。前者长度一般在5cm以上，图案较为复杂，大多镶有宝石。后者一般长2cm左右，花样也较为简单。多为独枝花朵或多边形的立体造型，还有的采用十二生肖造型。\r\n		</p>\r\n		<p>\r\n			胸针的型制更是集各种习俗情趣和时尚元素为一体。就我们常见的就有兰花形、钻戒形、椭圆形、扇形、蝶形、乐器形、花叶形和元宝形、动物形等。\r\n		</p>\r\n	</ul>\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>', 'setindex'),
(5, '钗', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191225/20191225115229_93586.jpg', '钗', '钗由两股簪子交叉组合成的一种首饰。钗用来绾住头发，也有用它把帽子别在头发上。 发钗的安插有多种方法，有的横插，有的竖插，有的斜插，也有自下而上倒插的。所插数量也不尽一致，既可安插两支，左右各一支;也可插上数支，视发髻需要而定，最多的在两鬓各插六支，合为十二支', '<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<ul>\r\n		<p>\r\n			发钗是由两股簪子交叉组成的一种首饰。有的一股长一股短，有的两股是一样长短。制作成两股是方便插戴。这和我们现在的发夹有相似之处，一短一长。\r\n		</p>\r\n		<p>\r\n			发钗最早起源于隋朝，是双股形状的，据在湖南长沙隋朝墓中出土的银质镶玉发钗，制作精良，雕刻细腻，钗首制作成花朵形，起名为钗朵。\r\n		</p>\r\n	</ul>\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src="/webe/admin/kindeditor/attached/image/20191225/20191225210925_92260.jpg" alt="" /> \r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	唐末时期的马缟《中华古今注﹒钗子》：“钗子，盖古笄之遗象也，至秦穆公以象牙为之，敬王以玳瑁为之，始皇又金银作凤头，以玳瑁为脚，号曰凤钗。”这句话是说钗子是从簪子发展而来的，在春秋战国时代开始，君主用象牙、玳瑁、金银制作簪子。钗与簪的共同点是都可以用来绾住头发，在簪首或钗首可以制作花鸟虫鱼、飞禽走兽、龙凤等。区别是发簪制作成一股，而发钗一般做成两股。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	在唐朝的时候，发钗发展到了鼎峰。钗首花饰接近于鬓花（插在发鬓前的花），像范冰冰《武媚娘传奇》中武媚娘成为昭仪时满头珠翠，鬓前插有花朵形制的钗子，左右各一支，这是完全符合唐朝的首饰发展的。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src="/webe/admin/kindeditor/attached/image/20191225/20191225211026_80101.jpg" alt="" /> \r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	发钗的钗首一般制作成有花鸟钗、花穗钗、缠枝钗、圆锥钗等，运用模压、雕刻、剪凿等工艺细细打磨、精雕细琢而做成，每式钗首都是一式两件，花纹相同而方向相反，这是由于左右分插，寻求着一种对称美，就像唐朝的长安城一样以朱雀大街为轴中心，两边街道对称，所以现在我们去西安站到大雁塔上，发现西安街两边是一样的。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	发钗的插法是可以横插、竖插、斜插，只要你觉得美丽大方不可方物，就插成左右对称的形状的横插、竖插或斜插，不会有固定的模式，只要你喜欢。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	到了清代慈禧时期，慈禧发明了一种新型的发型模式——大拉翅，会在大拉翅上插上发钗或发簪等众多装饰，侧面还可以悬挂流苏，做成一个固定的纯装饰性大两把头。需要时，戴在头上，不需要时，摘下搁置一边。既能美美的，又方便，好不美哉。清朝后期就属于不直接插在头发中。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src="/webe/admin/kindeditor/attached/image/20191225/20191225211110_98338.jpg" alt="" /> \r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	到了现代，人们流行简单时尚的装扮，发钗过于隆重，已经不符合时代发展潮流，于是人们把发钗简单化，变成了现在的发夹。即使在发夹首装饰有花朵，已经非常的精致小巧，让发夹看上去既简单又时尚。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	发钗这种装饰是随着时代的发展而逐渐变化的，符合当时当地女子的审美观。发钗材质也和当时的经济繁荣密切相关，例如唐朝制作发钗金银比较多，这是由于唐朝比较繁盛，多国来朝，金银器显得富丽堂皇，能够显示出大国风范。\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	这就是两股发钗的发展变化，始于隋朝，到现在简单时尚的发夹，经历了千年的发展\r\n</p>', 'setindex'),
(6, '簪', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191225/20191225115331_57367.jpg', '簪', '簪[zān]是笄的发展，同样起固定发髻之用，在前端加以纹饰，雕刻成植物(花草)、动物(凤凰孔雀)、吉祥器物(如意)等形，并可用金、玉、象牙、玳瑁等贵重材料制作，工艺也愈发丰富，有錾花、镂花及盘花等。', '<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<ul>\r\n		<p>\r\n			发簪式样十分丰富，主要变化多集中在簪首。它有各种各样的形状，还爱用花鸟鱼虫、飞禽走兽作簪首形状。常见的花种有梅花、莲花、菊花、桃花、牡丹花和芙蓉花等。以动物为簪首的发簪，常见的有龙凤、麒麟、燕雀及游鱼等，其中以凤簪最多，也最为精致。\r\n		</p>\r\n		<p>\r\n			明人《天水冰山录》中关于发簪名就有“金桃花顶簪”、“金梅花宝顶簪”、“金菊花宝顶簪”、“金宝石顶簪”、“金厢倒垂莲簪”、“金厢猫睛顶簪”、“金崐点翠梅花簪”等名称。以动物为簪首的发簪，常见的有龙凤、麒麟、燕雀及游鱼等，其中以凤簪最多，制作也最为精致。\r\n		</p>\r\n		<p>\r\n			<img src="/webe/admin/kindeditor/attached/image/20191226/20191226100752_50627.jpg" alt="" /> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n	</ul>\r\n	<ul>\r\n		<p>\r\n			例如有一件明代御制犀角发簪，以其精湛工艺而引人注目，也是发簪精湛制作工艺的一个缩影。取犀角做发簪十分罕见，一株上好硕大的犀角用来做如此长度的发簪，限于材料最多只能做两支，十分费料。发簪采用了如意造型、素身，铭文“宫”及“十二”字样。 从一些拍卖资料中看到，一件明代陆子冈制白玉螭龙发簪，成交了47.04万元。这件玉簪为白玉蘑菇头式，长度较短，应为明代男子用簪。簪身减地浮雕龙纹，篆书铭文：“言念君子，温其如玉。文中子赞，陆子冈制。”此件玉簪雕工秀雅，龙纹线条连绵自如，篆文稳健，应接近陆子冈的手制作品。此发簪无论从型制、纹饰、工艺、文字、打磨、包浆等任何方面判断，都是明代玉雕中的典型器。另外一件明代玉雕大师王小溪制作的白玉螭龙发簪，成交价42.56万元。\r\n		</p>\r\n		<p>\r\n			<img src="/webe/admin/kindeditor/attached/image/20191226/20191226101015_39226.jpg" alt="" /> \r\n		</p>\r\n		<p>\r\n			除了白玉、犀角材质的发簪之外，贵金属材质的也非常罕见。一件辽代的银鎏金凤簪，就非常吸引投资者的眼球，特别是上面凤凰的精湛工艺，更是让人叫绝，成交价6.6万元，这在十多年前已经是非常高的价格了。还有一对明代宣德年间金发簪，成交价17.92万元，这种金簪的簪首为伞形旋转花卉，款为“随驾银作局宣德叁年拾贰月内造玖成金捌钱”，显示其为宣德三年银作局制，是典型明早期官造金器，传世极为罕见。\r\n		</p>\r\n	</ul>\r\n</p>\r\n<p style="text-indent:2em;">\r\n	<br />\r\n</p>', 'setindex'),
(7, '珥珰', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191225/20191225115425_19967.jpg', '耳环', '耳坠,俗称耳环,古代称它为“珥”、“珰[dāng]”等。耳坠是国人佩戴历史最悠久、最普及的一种饰物,至今长盛不衰。', '<p style="text-indent:2em;">\r\n	<ul>\r\n		<p>\r\n			女人佩戴的耳环，已经有二千多年的历史了。最初叫“珰”，东汉刘熙《释名》说：“穿耳施珠曰‘珰’。兴于蛮夷，盛于华夏。” 千百年来，小小的耳饰成为女性提升美丽与颜值的必杀绝技，它的美从诞生开始就惊艳了世人。\r\n		</p>\r\n		<p>\r\n			耳珰古代耳饰的一种，在耳饰名称中最为古老的一种。汉代刘熙《释名·释首饰》：“穿耳施珠曰珰。”战国秦汉时期妇女戴耳珰的风气就已甚为流行。《孔雀东南飞》中描写刘兰芝：“腰若流纨素，耳着明月珰。”\r\n		</p>\r\n		<p>\r\n			<img src="/webe/admin/kindeditor/attached/image/20191226/20191226095459_71355.jpg" alt="" /> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<ul>\r\n			<p>\r\n				在《苍颉篇》中有记录：珥，珠在珥也，耳珰垂珠者曰珥。也就是说，后来，人们把耳饰分为珥，或者珰。就是说，当时的耳饰，没有垂吊珠子的时候，称为珰，有垂吊珠子等坠饰的就叫珥了。不过总称可以称为耳珰。根据资料，战国时期的墓葬中确实已出现玻璃耳珰的随葬品。\r\n			</p>\r\n			<p>\r\n				不过要说的是，耳珰却并不是当时汉族女子普遍佩戴的耳饰。我们都知道古代的中原女子讲究身体发肤，受之父母，不可毁伤，因此不流行穿耳。故此，佩戴耳珰并不是源自中原的习俗，而是从少数民族引入的。汉代刘熙《释名·释首饰》曰：“穿耳施珠曰珰，此本出于蛮夷所为也。蛮夷妇女轻淫好走，故以此琅珰锤之也。今中国人效之。”\r\n			</p>\r\n		</ul>\r\n<img src="/webe/admin/kindeditor/attached/image/20191226/20191226095544_72638.jpg" alt="" /> \r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<ul>\r\n			<p>\r\n				而且耳珰的材质比之前的玦更多了，有金、玉、银、玻璃、骨、象牙、玛瑙、琥珀、水晶、大理石等不同质料。根据考古发现的战国秦汉玻璃耳珰，主要有无孔珰和有孔珰两种。\r\n			</p>\r\n			<p>\r\n				有孔珰：中有纵贯的穿孔，用以穿线系坠饰，坠饰多为玻璃珠、玑、小铃之类。\r\n			</p>\r\n			<p>\r\n				无孔珰：两端大，中腰细。一端呈圆锥形，另一端呈鼓起的圆珠状。戴的时候，以圆锥状细端，插入人耳垂的穿孔中。此种玻璃耳珰戴上以后，从正面看去，只能见到露出在耳垂前面的圆珠，所以当时人们称它为“圆珰”。\r\n			</p>\r\n			<p>\r\n				<img src="/webe/admin/kindeditor/attached/image/20191226/20191226095625_67689.jpg" alt="" /> \r\n			</p>\r\n			<p>\r\n				<br />\r\n			</p>\r\n			<ul>\r\n				<p>\r\n					根据资料，汉代皇后、嫔妃和公主戴耳饰时，也可以不穿耳，而是将有穿孔的珥或珰，用绳系饰悬于耳旁，叫做“悬珥”。将悬珥系于发簪之首，插簪于发髻，悬于耳际，也叫“簪珥”。\r\n				</p>\r\n				<p>\r\n					这是一种象征性的耳饰，它也是有一个寓意在里面。其用意和古代帝王冕冠上的“充耳”一样，是提醒不要妄听闲言，不能偏听偏信。这一点跟少数民族约束的寓意也是有些相似之意的。\r\n				</p>\r\n			</ul>\r\n			<p>\r\n				<br />\r\n			</p>\r\n		</ul>\r\n		<p>\r\n			<br />\r\n		</p>\r\n	</ul>\r\n</p>', 'setindex'),
(3, '璎珞', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191225/20191225114425_86522.jpg', '颈饰', '璎[yīng]珞[luò]古代用珠玉串成的装饰品，多用为颈饰，璎珞原为古代印度佛像颈间的一种装饰，后来随着佛教一起传入我国，唐代时，被爱美求新的女性所模仿和改进，变成了项饰。它形制比较大，在项饰中最显华贵', '<p style="text-indent:2em;">\r\n	<ul>\r\n		<p>\r\n			“璎珞”是什么？从字形来看，应该与玉有关。\r\n		</p>\r\n		<p>\r\n			先看一下《红楼梦》凤姐出场时的装扮：“头上戴着金丝八宝攒珠髻，绾着朝阳五凤挂珠钗，项上戴着赤金盘螭璎珞圈。”\r\n		</p>\r\n		<p>\r\n			“璎珞”屡屡见于《红楼梦》，不仅王熙凤有，宝玉和宝钗也都有，由此看来，璎珞是一种非常普遍的佩饰。那么这个名字极好听的饰物到底是什么呢？\r\n		</p>\r\n		<p>\r\n			<img src="/webe/admin/kindeditor/attached/image/20191226/20191226102347_75234.jpg" alt="" /> \r\n		</p>\r\n		<p>\r\n			璎珞是环状的饰物，宽泛地说，包括挂在颈部和垂于胸部，戴于头部，戴在手臂和小腿等部位上的，主要是用珍珠、宝石和贵金属串联制成的饰品。\r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<ul>\r\n			<p>\r\n				《妙法莲华经》记载用“金、银、琉璃、砗磲、玛瑙、真珠（即珍珠）、玫瑰七宝合成众华璎珞”，可见璎珞应由世间众宝所成，寓意为“无量光明”。\r\n			</p>\r\n			<p>\r\n				璎珞可以分为项圈式和披挂式两种。\r\n			</p>\r\n		</ul>\r\n<img src="/webe/admin/kindeditor/attached/image/20191226/20191226102319_58880.jpg" alt="" /> \r\n		<ul>\r\n			<p>\r\n				项圈式璎珞以项圈为主体，坠饰比较简单，项圈上雕以花卉纹饰，普遍较短，又称“短璎珞”，它流传到明清时期，其坠饰多搭配长命锁、如意、护身符等吉祥物，又叫璎珞圈。\r\n			</p>\r\n			<p>\r\n				披挂式璎珞不仅形制更长，款式也更为多样化，但它多被当成舞蹈饰品。\r\n			</p>\r\n			<p>\r\n				随着时间变迁，带着浓浓古意与美好寓意的璎珞形制虽有所变，但魅力仍存。“围”上这么一条，风华尽显！\r\n			</p>\r\n		</ul>\r\n		<p>\r\n			<br />\r\n		</p>\r\n	</ul>\r\n</p>', 'setindex'),
(8, '步摇', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191225/20191225115511_56474.jpg', '簪', '步摇是在顶部挂珠玉垂饰的簪或钗，是古代妇女插于鬓发之侧以作装饰之物，同时也有固定发髻的作用。一般形式为凤凰、蝴蝶、带有翅膀类的，或垂有旒苏或坠子，走路的时候，金饰会随走路的摆动而动，栩栩如生。取其行步则动摇，故名。', '<p style="text-indent:2em;">\r\n	<ul>\r\n		<p>\r\n			步摇是中国古代妇女的一种首饰。取其行步则动摇，故名。其制作多以黄金屈曲成龙凤等形，其上缀以珠玉。六朝而下，花式愈繁，或伏成鸟兽花枝等，晶莹辉耀，与钗钿相混杂，簪于发上，材料主要有金、银、玉、玛瑙等。\r\n		</p>\r\n		<p>\r\n			步摇为中国传统汉民族首饰，西汉时在西域地区有其雏形进而吸收创新而来，约在东汉时经燕传入辽西，后又向东传入 高丽鲜半岛及日本并对当地的文化都产生了深远的影响。\r\n		</p>\r\n		<p>\r\n			<img src="/webe/admin/kindeditor/attached/image/20191226/20191226103210_33683.jpg" alt="" /> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<ul>\r\n			<p>\r\n				步摇以金银玉石等质地，宋明以来一直流传的头饰。其形制与质地都是等级与身份的象征。汉代以后，步摇才逐渐被民间百姓所见，才有机会在社会上广为流传。在贵族妇女中，还实行过一阵加於冠上的步摇冠。戴在头上较之步摇更富有富贵豪华之感。\r\n			</p>\r\n			<p>\r\n				“云鬓花颜金步摇，芙蓉帐暖度春宵。春宵苦短日高起，从此君王不早朝。” 这是白居易《长恨歌》节选的几句，唐代的女人钟爱步摇花，似乎美人配步摇才有倾国倾城的情致与风韵，据说杨贵妃在最初接受唐玄宗恩宠的时候，头上戴的正是步摇花。\r\n			</p>\r\n			<p>\r\n				步摇这种饰品自先秦时期既已以礼制饰物的身份出现，经过汉魏南北朝时期的发展，盛行于唐代。唐代因着开放的社会风气和繁荣的经济，步摇才从富贵华丽、庄严神圣的礼制饰物变成普遍流行的饰品。\r\n			</p>\r\n		</ul>\r\n		<p>\r\n			<br />\r\n		</p>\r\n	</ul>\r\n</p>', 'setindex'),
(9, '团扇', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191226/20191226105619_35238.jpg', '扇', '团扇又称宫扇、纨扇。中国传统工艺品及艺术品。是一种圆形有柄的扇子。团扇起源于中国。扇子最早出现在商代，用五光十色的野鸡毛制成，称之为“障扇”。当时，扇子不是用来扇风取凉，而是作为帝王外出巡视时遮阳挡风避沙之用。', '<blockquote style="text-indent:2em;">\r\n	<blockquote>\r\n		<p>\r\n			中国扇的种类非常多，可分为两大系统：柄扇和折扇，柄扇有竹扇、蒲扇、羽扇、麦扇和芭蕉扇等，而大部分成为书画歌赋的载体，团扇和折扇则是书画扇中最具典型性的两种。<span>团扇由柄和圆或近似圆的扇面这两部分组成，以圆为主，但随着历朝历代的发展，团扇也逐渐演变出圆角方形、六边形、八边形，以及玉佩式、鸡心式或凤尾式等，苏州的绢宫扇有六角、海棠、长方、腰圆、钟离，鸡心、风尾、景花、玉佩、龙球、宫灯、金钟等名目，形状各异。</span><span>团扇的产生远远早于折扇，据传折扇从日本或高丽等地传至中国，而团扇却一直植根于中国，是真正的国粹。</span> \r\n		</p>\r\n		<p>\r\n			<span> 古时候，风流才子们偏好手持折扇吟诗作对，而女子们，则喜欢手持团扇半遮面，有一种欲语还休的含蓄之美。团扇之美，横贯古今，无论什么时候都能让人为它的精美而赞叹。</span> \r\n		</p>\r\n	</blockquote>\r\n</blockquote>\r\n<blockquote style="text-indent:2em;">\r\n	<hr />\r\n	<img src="/webe/admin/kindeditor/attached/image/20191225/20191225203215_87189.jpg" alt="" /> \r\n</blockquote>\r\n<blockquote style="text-indent:2em;">\r\n	<br />\r\n</blockquote>\r\n<blockquote style="text-indent:2em;">\r\n	<span>银烛秋光冷画屏，轻罗小扇扑流萤。</span><span>团扇</span><span style="line-height:1;"></span><span>，在中国这个古老的国度里由来已久。“银烛秋光冷画屏，轻罗小扇扑流萤。”这里的轻罗小扇指的就是“团扇”，古时候，人们最初发明团扇是为了遮阳、挡风，直到汉代时，扇子才开始有了“消暑”的功能，也正是这个时候，扇子的样式以及制作技术都得到了很大的提升。 汉代时，汉成帝的妃子班婕妤在失宠后曾作《团扇歌》，“新制齐纨素，皎洁如霜雪。裁为合欢扇，团团如明月。”借用扇子隐喻自身，言语清丽，感人至深。</span> \r\n</blockquote>\r\n<blockquote style="text-indent:2em;">\r\n	<br />\r\n	<hr />\r\n	<img src="/webe/admin/kindeditor/attached/image/20191225/20191225204127_86041.jpg" alt="" /> \r\n</blockquote>\r\n<blockquote style="text-indent:2em;">\r\n	<br />\r\n</blockquote>\r\n<blockquote style="text-indent:2em;">\r\n	团扇，自古就有团圆之意。一把团扇通常由扇骨、扇面、扇柄、流苏等配饰组成，扇面的材质也各有不同，上到竹、木、纸、象牙、玳瑁、翡翠、飞禽翎毛，下到棕榈叶、槟榔叶、麦杆、蒲草等皆能入了扇面。 如今，团扇不仅在国内各大电视剧中绽放光彩，其蕴含的古老的东方韵味在国际舞台上也一样令人惊艳。\r\n</blockquote>\r\n<blockquote style="text-indent:2em;">\r\n	<br />\r\n</blockquote>\r\n<blockquote style="text-indent:2em;">\r\n	团扇复团扇，奉君清暑殿。秋风入庭树，从此不相见。\r\n</blockquote>\r\n<blockquote style="text-indent:2em;">\r\n	<span style="line-height:1;"></span><br />\r\n</blockquote>\r\n<blockquote style="text-indent:2em;">\r\n	青青林中竹。可作白团扇。动摇玉郎手。因风访方便。\r\n	<p>\r\n		<br />\r\n	</p>\r\n</blockquote>', 'setindex'),
(10, '香囊', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191225/20191225115646_82674.jpg', '香囊', '香囊又名香袋、花囊。香囊与荷包并非同一种物件。它是古代劳动妇女创造的一种民间刺绣工艺品。是以男耕女织为标志的古代农耕文化的产物，是越千年而余绪未泯的传统文化的遗存和再生。', '<p style="text-indent:2em;">\r\n	<ul>\r\n		<p>\r\n			香囊，用于盛放香料的小囊，佩戴在身上作为饰品，又可叫香袋、花囊、也可以叫做荷包。\r\n		</p>\r\n		<p>\r\n			香囊最初是由佩囊发展而来的。佩囊是古人用来盛放零星细物的小布兜。古人衣服上没有口袋，一些随身携带的必需品，香囊即属于佩囊的一种，因囊中盛放香料而得名，它是与中国传统中草药文化密不可分的。\r\n		</p>\r\n		<p>\r\n			上古时期，神农尝百草而辨草药，除了治病救人，草药日常的辟邪防病功能也被极大地“开发”出来。早在殷商时期，便出现了以草药制作的酒，到了周代，人们便开始了佩戴香囊、沐浴兰汤的习俗。香囊内装着茅香、辛夷等重要和香料，既驱病辟邪，又能使佩戴者遍体生香，给人留下良好的印象。崇尚礼学的周人再度扩展它的功用，将它变成礼仪中的必要元素。\r\n		</p>\r\n		<p>\r\n			<img src="/webe/admin/kindeditor/attached/image/20191225/20191225213723_83756.jpg" alt="" /> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<ul>\r\n			<p>\r\n				《周礼》曾记载，未成年男女，晨昏叩拜父母，必须佩戴香包；屈原《离骚》中有"扈江篱与辟芷兮，纫秋兰以为佩。"江离、辟芷、秋兰均为香草。这里的“佩”即佩帏，说的便是装满香草的香包。\r\n			</p>\r\n			<p>\r\n				而自战国时期以至秦、汉、晋，男人也开始堂而皇之佩戴香包，晋以后渐为女人、儿童的专用品。唐宋时期，香包是女子们必不可少的饰品，这个时候的香包，里面装盛的，则全是发散香味的香草了，随着它的盛行，男子也开始佩戴香包，直到后来，官员们上朝也在朝服上佩戴香包，香包的礼仪作用成为一种社会习俗。\r\n			</p>\r\n		</ul>\r\n<img src="/webe/admin/kindeditor/attached/image/20191225/20191225213751_29467.jpg" alt="" /> \r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<ul>\r\n			<p>\r\n				此情但愿两心知\r\n			</p>\r\n			<p>\r\n				印象最深的，是《红楼梦》中黛玉和宝玉赌气剪破香袋的片段，这次矛盾是二玉相互“印心”的一个重要事件，因为在清代，香囊已经是男女间定情的一个信物。黛玉之所以剪香囊，是对两人感情的一次失望和考验。\r\n			</p>\r\n			<p>\r\n				旧时没有电话，没有微信，男女之间互相写信又容易暴露，且“女子无才便是德”的陋俗常常使许多女子是文盲，青年男女相悦，便只好以香囊相赠，表达爱慕之情。所以在古代，一旦发现青年男女未经父母之命而私赠香囊，就是一件难以容忍的丑事。但封建习俗虽严，依然挡不住人们追求真爱的决心，所以在很多话本、曲词、小说和戏曲舞台上，香囊是表达爱情必不可少的工具。\r\n			</p>\r\n		</ul>\r\n<img src="/webe/admin/kindeditor/attached/image/20191225/20191225213823_42769.jpg" alt="" /> \r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<ul>\r\n			<p>\r\n				红绶带，锦香囊，为表花前意，殷勤赠玉郎。两心相印，海誓山盟，还有有什么比把定情信物贴身佩戴更能表示“我很在乎你”的呢？一枚小小的香囊，形影不离，时刻在身边最近的位置，就像爱慕那人的心，从来不曾远离。\r\n			</p>\r\n			<p>\r\n				如今，香水代替了香囊，却无法重写那旧时的情怀和深厚的文化。一寸相思无著处。甚夜长难度。香囊暗解，衣袖犹香，那款款的女子打古代而来，一枚穿越时空的奇香在民族文化的血液中，从不曾远去。\r\n			</p>\r\n		</ul>\r\n		<p>\r\n			<br />\r\n		</p>\r\n	</ul>\r\n</p>', 'setindex'),
(11, '玉佩', '本站', '2019/12/25', '/webe/admin/kindeditor/attached/image/20191225/20191225115734_92153.jpg', '玉佩', '古人的很多生活器具都是由玉雕成的，能常戴在身上的惟有玉佩。繁钦诗中"美玉"是指玉做的佩，或写作"佩"。古人对玉佩的热爱不是因为玉的贵重，而是源于玉的品格，所以古语有"君子无故，玉不去身"。', '<p style="text-indent:2em;">\r\n	<ul>\r\n		<p>\r\n			“君子如玉”，典出《诗经·小戎》：“言念君子，温其如玉”，自古，美玉即是君子的象征，蕴含了中国人独有的精神气质。\r\n		</p>\r\n		<p>\r\n			孔子说，玉有十一德，均是君子最珍贵的品质。后来学者将之归纳为“仁、义、智、勇、洁”五德。“聚天地之精华，得日月之灵气”，唯有玉也。\r\n		</p>\r\n		<p>\r\n			<img src="/webe/admin/kindeditor/attached/image/20191225/20191225211934_88821.jpg" alt="" /> \r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<ul>\r\n			<p>\r\n				君子无故，玉不去身。\r\n			</p>\r\n			<p>\r\n				中国人自古不尚外露，而崇内敛。外国多歌颂太阳，中国人独赏月；外国多喜黄金珠宝，中国人独佩玉；不爱光华四射五色炫目，偏爱崇尚平易可近，此为中国之文化特质也。\r\n			</p>\r\n		</ul>\r\n<img src="/webe/admin/kindeditor/attached/image/20191225/20191225211954_49616.jpg" alt="" /> \r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<ul>\r\n			<p>\r\n				谦谦君子，温润如玉\r\n			</p>\r\n			<p>\r\n				古人以玉规范人的行为，故要求“君子无故，玉不去身。”\r\n			</p>\r\n			<p>\r\n				金庸的《书剑恩仇录》里，乾隆送陈家洛佩玉上刻了字“慧极必伤，情深不寿，强极则辱，谦谦君子，温润如玉”。\r\n			</p>\r\n			<p>\r\n				飞扬跳脱的个性不属于谦谦君子，因为，玉的光芒是凛于内而非形于外的。这也是中国自古一贯的价值观，玉不重色而重质，君子不重地位高下，钱财多寡，形貌俊丑而重乎品德修养。\r\n			</p>\r\n		</ul>\r\n<img src="/webe/admin/kindeditor/attached/image/20191225/20191225212017_56513.jpg" alt="" /> \r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<ul>\r\n			<p>\r\n				不露锋芒，不事张扬，生命呈现出一种成熟的圆润，是国人最欣赏的态度。\r\n			</p>\r\n			<p>\r\n				竹，草木也。只有中国人看出它“未曾出土先有节，至凌云处仍虚心。”竹不自知有此高风亮节，是中国人赋予它文化品格。\r\n			</p>\r\n			<p>\r\n				玉，石头也。也是中国人看出它“色可以濡目，性可以涤身，光可以照心”。成为高洁与德行的象征。\r\n			</p>\r\n			<p>\r\n				一个民族对草木玉石的理解，体现了一个民族的品性。玉之美，亦是中国之美。\r\n			</p>\r\n		</ul>\r\n		<p>\r\n			<br />\r\n		</p>\r\n	</ul>\r\n</p>', 'setindex');

-- --------------------------------------------------------

--
-- 表的结构 `pro_comments`
--

CREATE TABLE IF NOT EXISTS `pro_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '记录id',
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `id_art` int(11) NOT NULL COMMENT '文章id',
  `content` text COMMENT '评论内容',
  `pubdate` varchar(50) DEFAULT NULL COMMENT '评论日期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `pro_comments`
--

INSERT INTO `pro_comments` (`id`, `username`, `id_art`, `content`, `pubdate`) VALUES
(9, '123aa', 11, 'asidbnoasndoasndoansdnasd', '2020-01-01'),
(8, '123aa', 11, '8545343434545146', '2020-01-01'),
(7, '123aa', 11, '8545343434545146', '2020-01-01');

-- --------------------------------------------------------

--
-- 表的结构 `qq`
--

CREATE TABLE IF NOT EXISTS `qq` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(30) DEFAULT NULL COMMENT '标题',
  `qqnum` varchar(15) DEFAULT NULL COMMENT 'QQ号码',
  `truename` varchar(20) DEFAULT NULL COMMENT '客服姓名',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `qq`
--

INSERT INTO `qq` (`id`, `title`, `qqnum`, `truename`) VALUES
(2, '技术支持', '1030969220', '爸爸'),
(6, '技术支持', '727315340', '妈妈'),
(7, '在线客服', '2249579140', '陆总');

-- --------------------------------------------------------

--
-- 表的结构 `single`
--

CREATE TABLE IF NOT EXISTS `single` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL COMMENT '单页标题',
  `comefrom` varchar(20) DEFAULT NULL COMMENT '来源',
  `pubdate` varchar(20) DEFAULT NULL COMMENT '发布日期',
  `thumbnail` varchar(100) DEFAULT NULL COMMENT '缩略图',
  `keywords` text COMMENT '关键字',
  `description` text COMMENT '描述',
  `content` text COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `single`
--

INSERT INTO `single` (`id`, `title`, `comefrom`, `pubdate`, `thumbnail`, `keywords`, `description`, `content`) VALUES
(2, '这是第一篇新闻', '本站', '2019年12月18日', '/webe/admin/kindeditor/attached/image/20191226/20191226193836_79079.jpg', '测试', '这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻这是第一篇新闻', '??????????????<img src="http://localhost/webe/admin/kindeditor/plugins/emoticons/images/0.gif" border="0" alt="" />'),
(3, '这是第一篇文章', '本站', '2019年12月26日', '/webe/admin/kindeditor/attached/image/20191226/20191226194344_83701.jpg', '这是第一篇文章', '这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章', '这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章这是第一篇文章'),
(4, '这是第三篇文章', '本站', '2019年12月26日', '/webe/admin/kindeditor/attached/image/20191226/20191226194402_80990.jpg', '这是第三篇文章', '这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章', '这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章这是第三篇文章'),
(5, '这是第四篇文章', '本站', '2019年12月26日', '/webe/admin/kindeditor/attached/image/20191226/20191226194515_56049.jpg', '这是第四篇文章', '这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章', '这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章这是第四篇文章');

-- --------------------------------------------------------

--
-- 表的结构 `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL COMMENT '幻灯标题',
  `thumbnail` varchar(255) DEFAULT NULL COMMENT '幻灯缩略图',
  `link` varchar(100) DEFAULT NULL COMMENT '链接地址',
  `orderid` int(11) DEFAULT NULL COMMENT '排序id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `slide`
--

INSERT INTO `slide` (`id`, `title`, `thumbnail`, `link`, `orderid`) VALUES
(1, '华裾阁', '/webe/admin/kindeditor/attached/image/20191226/20191226085105_70232.jpg', 'clothes_list.php', 1),
(2, '华裾阁', '/webe/admin/kindeditor/attached/image/20191226/20191226085250_44527.jpg', 'clothes_list.php', 2),
(3, 'huaju', '/webe/admin/kindeditor/attached/image/20191226/20191226181604_82301.png', 'clothes_list.php', 3);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` varchar(15) DEFAULT NULL COMMENT '用户名',
  `email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `phone` varchar(11) DEFAULT NULL COMMENT '手机号',
  `password` varchar(50) DEFAULT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `phone`, `password`) VALUES
(1, '123aa', '123456@qq.com', '13255555555', '123456'),
(2, '', '123@163.com', '12345678890', '123456'),
(3, '1234', '78787@sc.com', '18456794498', '123456'),
(4, 'test', 'test@qq.com', '13200000000', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
