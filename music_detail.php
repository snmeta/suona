<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>唢呐荟萃：乐曲</title>
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

<hr>
<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
	<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" >
		<span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span>
	</button>
	<div class="am-collapse am-topbar-collapse" id="blog-collapse">
		<ul class="am-nav am-nav-pills am-topbar-nav" style="font-size:15px">
			<li><img  src="images/logo.png" alt="snhcmenta Logo"/></li>
			<li><a href="homepage.php">首页</a></li>
			<li class="am-active"><a href="javascript:;">唢呐乐曲</a></li>
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
<hr>
<div class="w1000 auto ovh">
	<div class="column_box">
		<!--搜索框-->
		<form class="am-topbar-form am-topbar-right am-form-inline" role="search" action="music.php" method="post">
			<div class="am-form-group">  
				<input type="text" class="am-form-field am-input-sm" name="keywords" placeholder="请输入需要搜索的乐曲"></input>
				<button type="submit" name="submit" class="am-btn am-btn-secondary am-btn-sm">搜索</button>
				<a href="music.php" align="left"><u>返回结果页</u></a>
			</div>
		</form>
		<?php //获取搜索结果并输出
		include "getdetail.php" ;
		//获取搜索关键词
		$keywords = "id:".$_GET['id'];
		//获取结果
		$result = getdetail($keywords);
		//判断是否有结果
		if (count($result)==0){
			echo '
			<tr>
				<center>未找到相关内容</center>
			</tr>';
		}
		//若有，输出结果
		else{
			foreach ($result as $one){
		?>
				<div class="title1 cf">
					<h2 class="fl"><b><?php echo getfield($one['music_name']);?></b></h2>
				</div>
				<table class="am-table am-table-bordered">
					<tbody>
						<hr>
					<?php 
						echo "<p><b>".getfield($one['music_name'])."</b></p>";
						if (isset($one['music_byArtist'])){
							echo '<p><b>演奏者：</b><u><a href="redirect.php?keywords=person_name:'.getfield($one[music_byArtist]).'">'.getfield($one[music_byArtist]).'</a></u></p>';
						}else{
							echo "<p><b>演奏者：</b>未知</p>";
						}
						if (isset($one['music_about']))
							echo "<p><b>乐曲说明：</b>".getfield($one['music_about'])."</p>";
						else
							echo "<p><b>乐曲说明：</b>暂无</p>";
						if (isset($one['duration']))
							echo "<p><b>时长：</b>".getfield($one['duration'])."秒</p>";
						else
							echo "<p><b>时长：</b>未知</p>";
						if (isset($one['contentSize']))
							echo "<p><b>大小：</b>".getfield($one['contentSize'])."MB</p>";
						else
							echo "<p><b>大小：</b>未知</p>";
						if (isset($one['provider']))
							echo "<p><b>提供者：</b>".getfield($one['provider'])."</p>";
						else
							echo "<p><b>提供者：</b>未知</p>";
						if (isset($one['fileFormat']))
							echo "<p><b>文件类型：</b>".getfield($one['fileFormat'])."</p>";
						else
							echo "<p><b>文件类型：</b>未知</p>";
						echo '<u><a target="_blank" href="'.getfield($one['isBasedOn']).'">点击试听/下载</a></u>';
					?>
					</tbody>
				</table>
<?php		}
		}?>	
	</div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
</body>
</html>
