<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>唢呐荟萃：名人堂</title>
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
			<li><img src="images/logo.png" alt="snhcmenta Logo"/></li>
			<li><a href="homepage.php">首页</a></li>
			<li><a href="music.php">唢呐乐曲</a></li>
			<li><a href="qupu.php">唢呐乐谱</a></li>
			<li><a href="video.php">唢呐视频</a></li>
			<li><a href="movie.php">唢呐电影</a></li>
			<li class="am-active"><a href="javascript:;">唢呐名家</a></li>
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
		<form class="am-topbar-form am-topbar-right am-form-inline" role="search" action="person.php" method="post">
			<div class="am-form-group">  
				<input type="text" class="am-form-field am-input-sm" name="keywords" placeholder="请输入需要搜索的人物"></input>
				<button type="submit" name="submit" class="am-btn am-btn-secondary am-btn-sm">搜索</button>
				<a href="person.php" align="left"><u>返回结果页</u></a>
			</div>
		</form>
		<hr>
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
				</div>
				<table class="am-table">
				<?php
					echo "<tr>";
					echo "<td>";
					if (isset($one['image'])){
						echo '<center><img height="200" width="200" src="'.getfield($one['image']).'"/></center>';
					}else{
						echo  "无人物图片";
					}
					echo "</td>";
					echo "<td>";
					echo "<p><strong>姓名：</strong>".getfield($one['person_name'])."</p>";
					//性别
					echo "<strong>性别：</strong>".getfield($one['gender'])."</p>";
					//民族
					if (isset($one['ethnic'])){
						echo "<p><strong>民族：</strong>".getfield($one['ethnic'])."</p>";
					}else{
						echo  "<p><strong>民族：暂无</strong></p>";
					}
					if (isset($one['homeLocation'])){
						echo "<p><strong>家乡：</strong>".getfield($one['homeLocation'])."</p>";
					}else{
						echo  "<p><strong>家乡：暂无</strong></p>";
					}
					if (isset($one['birthDate'])){
						echo "<p><strong>生日：</strong>".getfield($one['birthDate'])."</p>";
					}else{
						echo  "<p><strong>生日：暂无</strong></p>";
					}
					echo "</td>";
					echo "</tr>";
					echo "<tr>";
					//人物作品 多值
					if (isset($one['person_works'])){
						echo "<p><strong>著名作品:<strong><p>";
						for ($i=0;$i<count($one['person_works']);$i++)
							echo " ".$one['person_works'][$i].";&nbsp";
					}
					else {
						echo "<p><strong>著名作品：</strong>无<p>";
					}
               
					//工作单位 多值
					if (isset($one['affiliation'])){
						echo "<p><strong>工作单位：</strong><p>";
						for ($i=0;$i<count($one['affiliation']);$i++)
							echo "<b>".$one['affiliation'][$i]."   &nbsp&nbsp";
						}
					else {
						echo "<p>工作单位：未知<p>";
					}
					//人物生平 多值
					if (isset($one['person_life'])){
						echo "<p><strong>生平：</strong>";
						for ($i=0;$i<count($one['person_life']);$i++)
							echo "<p>".$one['person_life'][$i]."&nbsp&nbsp";
					}
					else {
						echo "<p>生平：未知</p>";
					}
					//获得奖项 多值
					if (isset($one['person_awards'])){
						echo "<p><strong>所获奖项:</strong>";
						for ($i=0;$i<count($one['person_awards']);$i++)
							echo "&nbsp".$one['person_awards'][$i].";&nbsp&nbsp";
						echo "</p>";
					}
					else {
						echo "<p>所获奖项：未知<p>";
					}
					echo "</tr>";?>
				</table>
<?php		}
		}
		?> 
	</div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
</body>
</html>
