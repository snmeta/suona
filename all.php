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

<hr>
<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
	<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" >
		<span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span>
	</button>
	<div class="am-collapse am-topbar-collapse" id="blog-collapse">
		<ul class="am-nav am-nav-pills am-topbar-nav" style="font-size:15px">
			<li class="am-active"><img src="images/logo.png" alt="snhcmenta Logo"/></li>
			<li class="am-active"><a href="homepage.php">首页</a></li>
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
				<a href="homepage.php" align="left"><u>返回首页</u></a>
			</div>
		</form>
	</div>
</nav>
<hr>
<body id="blog">

<div class="w1000 auto ovh">
    <div class="column_box">
		<div class="title1 cf">
			<h1 class="fl">搜索结果</h1>
		</div>
		<table class="am-table am-table-bordered">
			<tbody>
			<?php //获取搜索结果并输出
				include "getdetail.php";
				//获取搜索关键词
				if (isset($_GET['keywords'])){
					$keywords = $_GET['keywords'];
				}
				else if(!empty($_POST['keywords'])){ 
					$keywords = "_text_:".$_POST['keywords'];
				}else{
				?>
				<script type="text/javascript"> 
					alert("请输入要搜索的内容！"); 
					window.location.href="homepage.php"; 
  				</script>
				<?php				
				}
				//获取当前页数
				$page = empty($_GET['page']) ? 1:$_GET['page'];
				//获取结果和总记录数、总页数
				$data=getcontent($keywords,$page);
				$result = $data['result'];
				$total = $data['total'];
				$pages = $data['pages'];
				$highlighting = $data['highlighting'];
				echo "共".$total."条结果。";
				echo "<hr>";
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
						echo '<hr>';
						getkey($one,$highlighting);
						echo '<hr>';
					}
				}?>	
			</tbody>
		</table>
	</div>
</div>
<!-- 分页-->
<?php
if($total>20){
?>
	<div class="am-g am-g-fixed ">
		<ul class="am-pagination am-avg-sm-8 am-g-centered">
			<li class="am-pagination-next"><a href="<?php echo 'all.php?page='.$pages.'&keywords='.$keywords ;?>">尾页 </a>         </li>
			<li class="am-pagination-next"><a href="<?php echo 'all.php?page='.($page+1).'&keywords='.$keywords;?>">下一页 </a>         </li>
			<li class="am-pagination-next"><a href="<?php echo 'all.php?page='.($page-1).'&keywords='.$keywords;?>">上一页</a>         </li>
			<li class="am-pagination-next"><a href="<?php echo 'all.php?page=1&keywords='.$keywords;?>">首页 </a>         </li>
		</ul>
	</div>
<?php
}
?>
<!-- content end -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script src="jquery-ui/jquery-ui.js"></script>
<script>
$( "input[name='keywords']:first" ).autocomplete({source: "autocomplete.php"});
</script>
</body>
</html>
