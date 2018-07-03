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
  <link href="jquery-ui/jquery-ui.css" rel="stylesheet">
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
                    <h1 class="blog-h-margin"><a href="http://video.chinaminyue.cn/dance/down-726.html">黄土情</a></h1>
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
                    <h1 class="blog-h-margin"><a href="http://video.chinaminyue.cn/dance/down-728.html">金蛇狂舞</a></h1>
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
                    <h1 class="blog-h-margin"><a href="http://video.chinaminyue.cn/dance/down-762.html">喜庆胜利</a></h1>
                    <p>乐曲创作于1977年。全曲分三段：第一段旋律热烈、欢畅。如歌的中间段与前段形成鲜明对比。再现部中的
					音型重复，节奏上的顿挫变化，模拟欢笑声和结尾前的快速双吐，造成热烈的音乐气氛。此曲表现战胜“四人帮”
					后人们喜庆胜利的欢欣、畅快情绪。
                    </p>
                                    
                </div>
            </div>
      </li>
      <li>
            <img height="620" width="1434" src="assets/i/b2.jpg"></a>
            <div class="am-slider-desc blog-slider-desc">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="http://video.chinaminyue.cn/dance/down-898.html" class="blog-color">Song &nbsp;</a></span>    
					<span>中国民乐</span>    					
                    <h1 class="blog-h-margin"><a href="http://video.chinaminyue.cn/dance/down-898.html">全家福</a></h1>
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
							<img src="assets/i/x1.jpg" alt="唢呐新闻" height="350" width="350" />
							<div class="trasrctitle1">
								<p class="title2">唢呐最新新闻</p>
							</div>
						</li>
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
						<a href="person_detail.php?id=pe1" target="_blank"><image src="renwu/1-1P31G15031.jpg" alt="唢呐名家1" height="200" width="230" /></a>
					</div>
					<p><a href="person_detail.php?id=pe1" style="color:#C00;" target="_blank">石海彬</a></p>
					<span style="text-align:left;display:block;">当代著名唢呐演奏家、文学硕士。现任中国民族管弦乐学会唢呐专业委员会副秘书长，</span>
				</td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
				<td width="280">
					<div class="">
						<a href="person_detail.php?id=pe3" target="_blank"><image src="renwu/1-1P31G14420.jpg" alt="唢呐名家2" height="200" width="230" /></a>
					</div>
					<p><a href="person_detail.php?id=pe3" style="color:#C00;" target="_blank">胡海泉</a></p>
					<span style="text-align:left;display:block;">中国当代著名唢呐演奏家、民族管乐大师、音乐教育家、作曲家、国家一级演员。</span>
				</td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
				<td width="280">
					<div class="">
						<a href="person_detail.php?id=pe2" target="_blank"><image src="renwu/1-1P31G15645.jpg" alt="唢呐名家3" height="200" width="230" /></a>
					</div>
					<p><a href="" style="color:#C00;" target="_blank">梁福德</a></p>
					<span style="text-align:left;display:block;"> 著名唢呐演奏家、笛子演奏家、（民族管乐演奏家）音乐教育家，现任山西戏剧职业学院民乐教研室主任</span>
				</td>
			</tr>
		</table>
		<ul class="am-pagination">
			<li class="am-pagination-next"><a href="person.php">查看更多名家 &raquo;</a></li>
		</ul>
	</div>
</div>
<div class="w1000 auto ovh">
	<div class="column_box">
		<div class="title1 cf">
			<h2 class="fl">唢呐热门视频</h2><a href=""> </a>
		</div>
		<table class="leader_url">
		<?php 
			$data = getcontent("video:*",1);
			$result = $data['result'];
			$i=0;
			for($i;$i<10;){
		?>
				<tr>
		<?php
				for($j=0;$j<5;$j++){
					$one = $result[$i];
					if(isset($one)){
						$i++;
		?>
						<td>
							<center><image height="150" width="150" src="<?php echo getfield($one['thumbnail']);?>"/></center>
							<p><b><a href="video_detail.php?id=<?php echo getfield($one['id']);?>"><?php echo "<center>".getfield($one['video_caption'])."</center>";?></a></b></p>
							<p><?php 
								if (isset($one['uploadDate'])){
									$date=transdate($one['uploadDate']); 
									echo "<center>".$date['nyr']."</center>";
								}else{
									echo "<center>--</center>";
								}
								?>
							</p>
							<p><center><?php echo getfield($one['resource']);?></center></p>
						</td>						
			<?php	}
				}
				echo "</tr>";
			}?>
		</table>
	   <ul class="am-pagination">
         <li class="am-pagination-next"><a href="video.php">查看更多视频 &raquo;</a>         </li>
      </ul>
		</div>
		</div>
		
		 <div class="bgbar w100p"></div>
         <div class="w1000 auto ovh mt20">


<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="jquery-ui/jquery-ui.js"></script>
<script>
$( "input[name='keywords']:first" ).autocomplete({source: "autocomplete.php"});
</script>
</body>
</html>
