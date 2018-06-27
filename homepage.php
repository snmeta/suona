<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>唢呐荟萃主页</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileImage" content="assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">
  <link rel="stylesheet" href="assets/css/amazeui.min.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/swiper.min.css">
</head>

<body id="blog">

<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        <h2 class="am-hide-sm-only">唢呐荟萃</h2>
    </div>
</header>
<hr>
<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
	<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" >
		<span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span>
	</button>
	<div class="am-collapse am-topbar-collapse" id="blog-collapse">
		<ul class="am-nav am-nav-pills am-topbar-nav" style="font-size:15px">
			<li class="am-active"><img src="images/logo.png" alt="snhcmenta Logo"/></li>
			<li class="am-active"><a href="javascript:;">首页</a></li>
			<li><a href="music.php">唢呐乐曲</a></li>
			<li><a href="qupu.php">唢呐乐谱</a></li>
			<li><a href="video.php">唢呐视频</a></li>
			<li><a href="movie.php">唢呐电影</a></li>
			<li><a href="person.php">唢呐名家</a></li>
			<li><a href="baike.php">唢呐百科</a></li>
			<li><a href="instrument.php">唢呐乐器</a></li>
			<li><a href="article.php">唢呐文章</a></li>
			<li><a href="news.php">唢呐新闻</a></li>
		</ul>
		<form class="am-topbar-form am-topbar-right am-form-inline" role="search" action="all.php" method="post">
			<div class="am-form-group">  
				<input type="text" class="am-form-field am-input-sm" name="keywords" placeholder="请输入需要搜索的内容" value="<?php 
				if(!empty($_POST['keywords'])){
					$out=$_POST['keywords'];
				}else if(!empty($_GET['keywords'])){
					$r = explode(':',$_GET['keywords']);
					$out = $r[1];
				}else{
					$out='';
				}
				echo $out;
				?>"></input>
				<button type="submit" name="submit" class="am-btn am-btn-secondary am-btn-sm">搜索</button>
			</div>
		</form>
	</div>
</nav>
<!-- nav end -->

<!-- banner start -->
<div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-article-margin">
    <div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{&quot;controlNav&quot;:false}' >
    <ul class="am-slides">
      <li>
            <img height="620" width="1434" src="assets/i/b1.jpg">
            <div class="blog-slider-desc am-slider-desc ">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="http://video.chinaminyue.cn/dance/down-726.html" class="blog-color">Song &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">黄土情</a></h1>
					<span class="blog-bor">作者：周东朝</span>
                    <p>《黄土情》是我国当代著名唢呐演奏家周东朝先生在1992年创作的，乐曲表达了西北人们在改革开放中
					奋发图强的精神面貌。此乐曲曲调质朴，深情，表达了西北人们对家乡的热爱和依恋之情
                    </p>
                    
                    <br><br><br><br><br><br><br>                
                </div>
            </div>
      </li>
      <li>
            <img height="620" width="1434" src="assets/i/b2.jpg">
            <div class="am-slider-desc blog-slider-desc">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="http://video.chinaminyue.cn/dance/down-728.html" class="blog-color">Song &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">金蛇狂舞</a></h1>
					<span>作者：聂耳</span>         
                    <p>聂耳根据云南民间音乐编曲的《金蛇狂舞》，是一首广泛流传的民族器乐曲。此曲以热烈、欢畅的
					旋律和明快、活跃的节奏，表现了人们在欢度元宵佳节时舞龙戏狮的热闹情景。
                    </p>
                          
                </div>
            </div>
      </li>
      <li>
            <img height="620" width="1434" src="assets/i/b3.jpg">
            <div class="am-slider-desc blog-slider-desc">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="http://video.chinaminyue.cn/dance/down-762.html" class="blog-color">Song &nbsp;</a></span>         
					<span>中国民乐</span>
                    <h1 class="blog-h-margin"><a href="">喜庆胜利</a></h1>
                    <p>乐曲创作于1977年。全曲分三段：第一段旋律热烈、欢畅。如歌的中间段与前段形成鲜明对比。再现部中的
					音型重复，节奏上的顿挫变化，模拟欢笑声和结尾前的快速双吐，造成热烈的音乐气氛。此曲表现战胜“四人帮”
					后人们喜庆胜利的欢欣、畅快情绪。
                    </p>
                                    
                </div>
            </div>
      </li>
      <li>
            <img height="620" width="1434" src="assets/i/b2.jpg">
            <div class="am-slider-desc blog-slider-desc">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="http://video.chinaminyue.cn/dance/down-898.html" class="blog-color">Song &nbsp;</a></span>    
					<span>中国民乐</span>    					
                    <h1 class="blog-h-margin"><a href="">全家福</a></h1>
                    <p>《全家福》本属于用豫北安阳地区的民间戏曲唱腔、板式、曲牌组合起来的吹奏乐曲，它的形成、加工、改编，
					经历了一个漫长而曲折的创作过程。
                    </p>                               
                </div>
            </div>
      </li>
    </ul>
    </div>
</div>
<!-- banner end -->

<!-- content srart -->
<!--<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-8 am-u-sm-12">

        <article class="am-g blog-entry-article">
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                <img src="assets/i/f10.jpg" alt="" class="am-u-sm-12">
            </div>
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-article">
                <span><a href="" class="blog-color">唢呐新闻 &nbsp;</a></span>
                <span> @amazeUI &nbsp;</span>
                <span>2015/10/9</span>
                <h1><a href="">唢呐新闻1</a></h1>
                <ul><a href="" class="">我们一直在坚持着，不是为了改变这个世界，
				而是希望不被这个世界所改变。
                </a></ul>
				<!--<h1><a href="" class="">唢呐新闻2</a></h1>-->
				<!--<ul><a href="" class="">今天的唢呐新闻是什么我也不知道呀</a></ul>
				<h1><a href="" class="">唢呐新闻3</a></h1>
				<ul><a href="" class="">今天的唢呐新闻是什么我还是不知道呀</a></ul>
				<ul><a href="" class="">今天的唢呐新闻是什么我还是不知道呀</a></ul>
				<ul><a href="" class="">今天的唢呐新闻是什么我还是不知道呀</a></ul>
				<ul><a href="" class="">今天的唢呐新闻是什么我还是不知道呀</a></ul>
				<ul><a href="" class="">今天的唢呐新闻是什么我还是不知道呀</a></ul>
				<ul><a href="" class="">今天的唢呐新闻是什么我还是不知道呀</a></ul>
                <!--<p><a href="" class="blog-continue">continue reading</a></p>
            </div>
        </article>-->
		  <div class="w1000 auto ovh">
        <div class="column_box">
      <div class="title1 cf">
        <h2 class="f1">新闻动态<a href=""></a></h2> 
      </div>
      
      <div class="newsbox cf">
        <div class="tra_srcimg fl">
          <div id="news" class="swiper-container">
            <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                <a href="http://ggglxy.scu.edu.cn/index.php?c=article&amp;a=type&amp;tid=194" target="_blank"><img src="assets/i/x1.jpg" alt="唢呐新闻" height="350" width="350" /></a>
                <div class="trasrctitle1">
                  <p class="title2">唢呐最新新闻</p>
                </div>
              </li>
                            <!--<li class="swiper-slide">
                <a href="http://ggglxy.scu.edu.cn/index.php?c=article&amp;id=1676" target="_blank"><img src="assets/i/x2.jpg" alt=""></a>
                <div class="trasrctitle1">
                  <p class="title2">“悦纳自我，携手共进”公共管理学院大学生心理健康系列主题活动顺利展开</p>
                </div>
              </li>
                            <li class="swiper-slide">
                <a href="http://ggglxy.scu.edu.cn/index.php?c=article&amp;id=1674" target="_blank"><img src="assets/i/x3.jpg" alt=""></a>
                <div class="trasrctitle1">
                  <p class="title2">四川大学公共管理学院2018年春季博士毕业论文答辩会顺利举行</p>
                </div>
              </li>
                            <li class="swiper-slide">
                <a href="http://ggglxy.scu.edu.cn/index.php?c=article&amp;id=1664" target="_blank"><img src="assets/i/x4.jpg" alt=""></a>
                <div class="trasrctitle1">
                  <p class="title2">我院举行“华图优秀学生奖学金”颁奖典礼暨公务员备考交流会</p>
                </div>
              </li>
                            <li class="swiper-slide">
                <a href="http://ggglxy.scu.edu.cn/index.php?c=article&amp;id=1665" target="_blank"><img src="assets/i/x5.jpg" alt=""></a>
                <div class="trasrctitle1">
                  <p class="title2">2015级行政管理班级荣获四川大学“模范班级”称号</p>
                </div>
              </li>-->
                          </ul>
            <div id="news-pagination" class="swiper-pagination"></div>
          </div>
        </div>
        <div class="index_newsbox fr">
            <ul class="index_news_ul">
			<?php 
			include "getcontent.php";
			$result = getcontent("news:*",1)['result'];
			$count = 0;
			foreach ($result as $one){
				$count = $count+1?>	
                <li><a href="<?php echo getfield($one['URL']);?>" class="fl"><?php echo getfield($one['news_name']);?></a><span class="time fr"><?php echo transdate(getfield($one['uploadDate']))['nyr'];?></span></li>
            <?php if ($count==12) break;}?>   
            </ul>
			<ul class="am-pagination">
         		<li class="am-pagination-next"><a href="news.php">查看更多新闻 &raquo;</a>         </li>
      		</ul>
        </div>
		
      </div>
    </div>
      </div>

         <div class="w1000 auto ovh">
        <div class="column_box">
      <div class="title1 cf">
        <h2 class="fl">唢呐名家<a href=""></a></h2> 
      </div>
	  <table class="leader_url">
	  <tr>
	  <td width="280">
	  <div class="">
	  <a href="" target="_blank">
	  <image src="renwu/1-1P31G15031.jpg" alt="唢呐名家1" height="200" width="230" /></a>
	  </div>
	  <p ><a href="" style="color:#C00;" target="_blank">石海彬</a></p>
	  <span style="text-align:left;display:block;">当代著名唢呐演奏家、文学硕士。现任中国民族管弦乐学会唢呐专业委员会副秘书长，中国音乐家协会民族管乐研究会副秘书长，中央音乐学院副教授，硕士研究生导师。</span></td>
	  <td width="280">
	  <div class="">
	  <a href="" target="_blank">
	  <image src="renwu/1-1P31G14420.jpg" alt="唢呐名家2" height="200" width="230" /></a>
	  </div>
	  <p ><a href="" style="color:#C00;" target="_blank">胡海泉</a></p>
	  <span style="text-align:left;display:block;">中国当代著名唢呐演奏家、民族管乐大师、音乐教育家、作曲家、国家一级演员。</span></td>
	  <td width="280">
	  <div class="">
	  <a href="" target="_blank">
	  <image src="image":"renwu/1-1P31G15645.jpg" alt="唢呐名家3" height="200" width="230" /></a>
	  </div>
	  <p ><a href="" style="color:#C00;" target="_blank">梁福德</a></p>
	  <span style="text-align:left;display:block;"> 著名唢呐演奏家、笛子演奏家、（民族管乐演奏家）音乐教育家，现任山西戏剧职业学院民乐教研室主任
</span></td> </table>
	  <ul class="am-pagination">
         <li class="am-pagination-next"><a href="person.php">查看更多名家 &raquo;</a>         </li>
      </ul>
	  <!--<div><a href="/index.php?c=special&sid=1" style="text-align: right;">+查看更多</a></div>-->
	 
	  </div>
	  </div>

         <div class="w1000 auto ovh">
        <div class="column_box">
      <div class="title1 cf">
        <h2 class="fl">唢呐热门视频</h2><a href=""> </a>
      </div>
	  <table class="leader_url">
	  <tr>
	  <td>
	  <div class="">
	  <a href="" target="_blank">
	  <image src="http://vthumb.ykimg.com/054201015A9961488B3C46A7733CD913" alt="唢呐视频1" height="190" width="190" /></a>
	  </div>
	  <p ><a href="http://v.youku.com/v_show/id_XMzQzNTA2MjQ4NA==.html" style="color:#C00;" target="_blank">农村唢呐, 大哥吹出了悲伤, 吹哭了在场的人</a></p>
	  <span style="text-align:left;display:block;">小武说历史</span></td>
	  <td>
	  <div class="">
	  <a href="" target="_blank">
	  <image src="http://img.alicdn.com/tfs/TB1GruCj1OSBuNjy0FdXXbDnVXa-180-102.png" alt="唢呐视频2" height="190" width="190" /></a>
	  </div>
	  <p ><a href="http://v.youku.com/v_show/id_XNDczOTEzNzI0.html" style="color:#C00;" target="_blank">唢呐大联唱片头-薛心痛</a></p>
	  <span style="text-align:left;display:block;">薛菜哥</span></td>
	  <td>
	  <div class="">
	  <a href="" target="_blank">
	  <image src="http://img.alicdn.com/tfs/TB1GruCj1OSBuNjy0FdXXbDnVXa-180-102.png" alt="唢呐视频3" height="190" width="190" /></a>
	  </div>
	  <p ><a href="http://v.youku.com/v_show/id_XMzYzNjg4NTQyMA==.html" style="color:#C00;" target="_blank">贵阳青岩唢呐</a></p>
	  <span style="text-align:left;display:block;">喜欢自己的喜欢别人说去吧</span></td></tr>
	  <tr>
	  <td>
	  <div class="">
	  <a href="" target="_blank">
	  <image src="http://img.alicdn.com/tfs/TB1GruCj1OSBuNjy0FdXXbDnVXa-180-102.png" alt="唢呐视频4" height="190" width="190" /></a>
	  </div>
	  <p ><a href="http://v.youku.com/v_show/id_XMzYzNDQ2OTYyMA==.html" style="color:#C00;" target="_blank">横笛, 女儿情, 开封洧川林平唢呐艺术</a></p>
	  <span style="text-align:left;display:block;">哈哈豆生活</span></td>
	  <td>
	  <div class="">
	  <a href="" target="_blank">
	  <image src="http://img.alicdn.com/tfs/TB1GruCj1OSBuNjy0FdXXbDnVXa-180-102.png" alt="唢呐视频5" height="190" width="190" /></a>
	  </div>
	  <p ><a href="http://v.youku.com/v_show/id_XMzYzNDAyNDM3Mg==.html" style="color:#C00;" target="_blank">唢呐高手在新民村事宴上吹奏西口情</a></p>
	  <span style="text-align:left;display:block;">军事五三</span></td>
	  <td>
	  <div class="">
	  <a href="" target="_blank">
	  <image src="http://img.alicdn.com/tfs/TB1GruCj1OSBuNjy0FdXXbDnVXa-180-102.png" alt="唢呐视频6" height="190" width="190" /></a>
	  </div>
	  <p ><a href="http://v.youku.com/v_show/id_XMzYzMjM4ODgyMA==.html" style="color:#C00;" target="_blank">纳雍寨乐唢呐</a></p>
	  <span style="text-align:left;display:block;">戴唢呐18785793670</span></td>
	  <tr>
	  <td>
	  <div class="">
	  <a href="" target="_blank">
	  <image src="http://img.alicdn.com/tfs/TB1GruCj1OSBuNjy0FdXXbDnVXa-180-102.png" alt="唢呐视频7" height="190" width="190" /></a>
	  </div>
	  <p ><a href="http://v.youku.com/v_show/id_XMzYyODY4ODY0NA==.html" style="color:#C00;" target="_blank">唢呐《篱笆墙的影子》真感人</a></p>
	  <span style="text-align:left;display:block;">嘻哈快乐人生</span></td>
	  <td>
	  <div class="">
	  <a href="" target="_blank">
	  <image src="http://img.alicdn.com/tfs/TB1GruCj1OSBuNjy0FdXXbDnVXa-180-102.png" alt="唢呐视频8" height="190" width="190" /></a>
	  </div>
	  <p ><a href="http://v.youku.com/v_show/id_XMzYyNzYwODQ4NA==.html" style="color:#C00;" target="_blank">六枝心莲心唢呐队</a></p>
	  <span style="text-align:left;display:block;">抢手的维奇酱</span></td>
	  <td>
	  <div class="">
	  <a href="" target="_blank">
	  <image src="http://vthumb.ykimg.com/054204085B09533B000001779F037941" alt="唢呐视频9" height="190" width="190" /></a>
	  </div>
	  <p ><a href="" style="color:#C00;" target="_blank">水城苗族唢呐</a></p>
	  <span style="text-align:left;display:block;">高同志de奥尼尔</span></td></tr></table>
	   <ul class="am-pagination">
         <li class="am-pagination-next"><a href="video.php">查看更多视频 &raquo;</a>         </li>
      </ul>
		</div>
		</div>
		
		 <div class="bgbar w100p"></div>
         <div class="w1000 auto ovh mt20">
    <!-- 通知公告-->
        <!--<div class="w490 fl">
      <div class="column_box">
        <div class="title1 title2 cf">
          <h2 class="fl">唢呐热门乐曲</h2>
          <a href="/index.php?c=article&a=type&tid=76" class="fr"></a>
        </div>
        <!--<ul class="tz_ul">
                    <li>
            <span class="label">置顶推荐</span>
            <a href="/index.php?c=article&id=1654">2018年“地方治理创新”国际学术论坛会议通知</a>
          </li>
                    <li>
            <span class="label">置顶推荐</span>
            <a href="/index.php?c=article&id=1647">四川大学公共管理学院2018年博士研究生调档函、政审表领取通知</a>
          </li>
                    <li>
            <span class="label">置顶推荐</span>
            <a href="/index.php?c=article&id=1650">四川大学公共管理学院2018年面向港澳台硕士研究生招生拟录取名单公示</a>
          </li>
                              <li>
            <span>2018-03-15</span>
            <a href="/index.php?c=article&id=1480">四川大学公共管理学院全日制MPA（西藏班）复试通知</a>
          </li>
                    <li>
            <span>2018-03-15</span>
            <a href="/index.php?c=article&id=1479">四川大学公共管理学院非全日制MPA复试通知</a>
          </li>
                    <li>
            <span>2018-03-15</span>
            <a href="/index.php?c=article&id=1478">四川大学公共管理学院全日制MPA复试通知</a>
          </li>
                    <li>
            <span>2018-03-15</span>
            <a href="/index.php?c=article&id=1476">四川大学公共管理学院2018年部分专业接受调剂信息</a>
          </li>
                    <li>
            <span>2018-01-12</span>
            <a href="/index.php?c=article&id=1450">四川大学公共管理学院专职博士后岗位招聘启事</a>
          </li>
                  </ul>
        <a href="/index.php?c=article&a=type&tid=76" class="more_btn_m dn">+查看更多</a>
      </div>
    </div>

    <div class="w1000 auto ovh">
        <div class="column_box">
      <div class="title1 cf">
        <h2 class="fl">唢呐热门乐曲</h2><a href=""> </a>
      </div>
           <ul class="index_news_ul">
		   <ul class="index_news_ul">
             <li><a href="#" class="f1">乐曲1</a> <span class="time fr">2017-11-22</span></li>
			 <li><a href="#" class="f1">乐曲2</a> <span class="time fr">2017-11-22</span></li>
			 <li><a href="#" class="f1">乐曲3</a> <span class="time fr">2017-11-22</span></li>
			 <li><a href="#" class="f1">乐曲4</a> <span class="time fr">2017-11-22</span></li>
			 <li><a href="#" class="f1">乐曲5</a> <span class="time fr">2017-11-22</span></li>
			 <li><a href="#" class="f1">乐曲6</a> <span class="time fr">2017-11-22</span></li>
			 <!--<li><a href="#" class="f1">乐曲7</a> <span class="time fr">2017-11-22</span></li>
			 <li><a href="#" class="f1">乐曲8</a> <span class="time fr">2017-11-22</span></li>
			 <li><a href="#" class="f1">乐曲9</a> <span class="time fr">2017-11-22</span></li>
			 <li><a href="#" class="f1">乐曲10</a> <span class="time fr">2017-11-22</span></li>
		   </ul>-->
		   <!--<ul class="am-pagination">
         <li class="am-pagination-next"><a href="">查看更多乐曲&raquo;</a>         </li>
      </ul>
        </div>
		</div>-->

<!-- content end -->



  <!--<footer class="blog-footer">
    <div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-footer-padding">
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>模板简介</h3>
            <p class="am-text-sm">这是一个使用amazeUI做的简单的前端模板。<br> 博客/ 资讯类 前端模板 <br> 支持响应式，多种布局，包括主页、文章页、媒体页、分类页等<br>嗯嗯嗯，不知道说啥了。外面的世界真精彩<br><br>
            Amaze UI 使用 MIT 许可证发布，用户可以自由使用、复制、修改、合并、出版发行、散布、再授权及贩售 Amaze UI 及其副本。</p>
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>社交账号</h3>
            <p>
                <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-github am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-weibo am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-reddit am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-weixin am-icon-fw blog-icon blog-icon"></span></a>
            </p>
            <h3>Credits</h3>
            <p>我们追求卓越，然时间、经验、能力有限。Amaze UI 有很多不足的地方，希望大家包容、不吝赐教，给我们提意见、建议。感谢你们！</p>          
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
              <h1>我们站在巨人的肩膀上</h1>
             <h3>Heroes</h3>
            <p>
                <ul>
                    <li>jQuery</li>
                    <li>Zepto.js</li>
                    <li>Seajs</li>
                    <li>LESS</li>
                    <li>...</li>
                </ul>
            </p>
        </div>
    </div>    
    <div class="blog-text-center">© 2015 AllMobilize, Inc. Licensed under MIT license. Made with love By LWXYFER</div>    
  </footer>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
</body>
</html>
