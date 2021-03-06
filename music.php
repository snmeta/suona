<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>唢呐：乐曲</title>
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

<hr>
<!-- nav start -->
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
				<label>排序：</label>
				<?php
						if(!empty($_POST['sort'])){
							$out=$_POST['sort'];
						}else if(!empty($_GET['sort'])){
							$out = $_GET['sort'];
						}else{
							$out='';
						}?>
						<select name="sort">
						<?php
							if($out=='')
								echo '<option value="" selected>默认排序</option>';
							else
								echo '<option value="">默认排序</option>';
							if($out=="duration asc")
								echo '<option value="duration asc" selected>按时长升序</option>';
							else
								echo '<option value="duration asc">按时长升序</option>';
							if($out=="duration desc")
								echo '<option value="duration desc" selected>按时长降序</option>';
							else
								echo '<option value="duration desc">按时长降序</option>';
							if($out=="uploadDate asc")
								echo '<option value="uploadDate asc" selected>按日期升序</option>';
							else
								echo '<option value="uploadDate asc">按日期升序</option>';
							if($out=="uploadDate desc")
								echo '<option value="uploadDate desc" selected>按日期降序</option>';
							else
								echo '<option value="uploadDate desc">按日期降序</option>';
					?>
				</select>
				<label>按时长筛选：</label>
				<?php
						if(!empty($_POST['duration'])){
							$out=$_POST['duration'];
						}else if(!empty($_GET['duration'])){
							$r = explode(':',$_GET['duration']);
							$out = $r[1];
						}else{
							$out='';
						}?>
						<select name="duration">
						<?php
							if($out=='')
								echo '<option value="" selected>请选择时长</option>';
							else
								echo '<option value="">请选择时长</option>';
							if($out=="[0 TO 600]")
								echo '<option value="[0 TO 600]" selected>10分钟以内</option>';
							else
								echo '<option value="[0 TO 600]">10分钟以内</option>';
							if($out=="[601 TO 1800]")
								echo '<option value="[601 TO 1800]" selected>10-30分钟</option>';
							else
								echo '<option value="[601 TO 1800]">10-30分钟</option>';
							if($out=="[1801 TO 3600]")
								echo '<option value="[1801 TO 3600]" selected>30-60分钟</option>';
							else
								echo '<option value="[1801 TO 3600]">30-60分钟</option>';
							if($out=="[3601 TO 4200]")
								echo '<option value="[3601 TO 4200]" selected>1小时以上</option>';
							else
								echo '<option value="[3601 TO 4200]">1小时以上</option>';
					?>
				</select>
				<input type="text" class="am-form-field am-input-sm" name="keywords" placeholder="请输入需要搜索的乐曲" value="<?php 
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
		<div class="title1 cf">
			<h2 class="fl">唢呐乐曲</h2><a href=""> </a>
		</div>
		<table class="am-table am-table-bordered">
			<thead>
				<tr>
					<th>名曲</th>  
					<th>演奏者</th>
					<th>持续时长</th>
					<th>来源</th>
				</tr>
			</thead>
			<tbody>
			<?php //获取搜索结果并输出
				include "getcontent.php" ;
				//获取搜索关键词
				if (isset($_GET['keywords'])){
					$keywords = $_GET['keywords'];
				}
				else{ 
					$keywords = empty($_POST['keywords']) ? "music:*":"music:".$_POST['keywords'];
				}
				if(isset($_GET['duration'])){
					$duration = $_GET['duration'];
				}else{
					$duration = empty($_POST['duration']) ? "":"duration:".$_POST['duration'];
				}
				$duration = urlencode($duration);
				if(isset($_GET['sort'])){
					$sort = $_GET['sort'];
					$sort = urlencode($sort);
					if($sort!="")
						$fqwords = 'fq='.$duration.'&sort='.$sort;
					else
						$fqwords = 'fq='.$duration;
				}else if(isset($_POST['sort'])){
					$sort = $_POST['sort'];
					$sort = urlencode($sort);
					if($sort!="")
						$fqwords = 'fq='.$duration.'&sort='.$sort;
					else
						$fqwords = 'fq='.$duration;
				}else{
					$fqwords = 'fq='.$duration;
				}
				//获取当前页数
				$page = empty($_GET['page']) ? 1:$_GET['page'];
				//获取结果和总记录数、总页数
				$data=getfilter($keywords,$fqwords,$page);
				$result = $data['result'];
				$total = $data['total'];
				$pages = $data['pages'];
				echo "共".$total."条结果。";
				//判断是否有结果
				if (count($result)==0){
					echo '
					<tr>
						<center>未找到相关内容</center>
					</tr>';
				}
				//若有，输出结果
				else{
					foreach ($result as $one){   ?>
						<tr>
							<td><a href="music_detail.php?id=<?php echo getfield($one['id']);?>"><?php echo getfield($one['music_name']);?></a></td>   
							<!--对于不确定有的字段，先判断这个字段有没有，再取值-->
							<?php 
								if (isset($one['music_byArtist'])){
									$music_byArtist=getfield($one['music_byArtist']);
								}else{
									$music_byArtist="--";
								}?>
							<td><a href="redirect.php?keywords=person_name:<?php echo $music_byArtist; ?>"><?php echo $music_byArtist ?></td>
							<td><?php 
								if (isset($one['duration'])){
									echo getfield($one['duration'])."秒";
								}else{
									echo "--";
								}?>
							</td>
							<td><?php echo getfield($one['provider']);?></td>
						</tr>
		<?php		}
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
			<li class="am-pagination-next"><a href="<?php echo 'music.php?page='.$pages.'&keywords='.$keywords.'&duration='.$duration.'&sort='.$sort;?>">尾页 </a></li>
			<li class="am-pagination-next"><a href="<?php echo 'music.php?page='.($page+1).'&keywords='.$keywords.'&duration='.$duration.'&sort='.$sort;?>">下一页 </a></li>
			<li class="am-pagination-next"><a href="<?php echo 'music.php?page='.($page-1).'&keywords='.$keywords.'&duration='.$duration.'&sort='.$sort;?>">上一页</a></li>
			<li class="am-pagination-next"><a href="<?php echo 'music.php?page=1&keywords='.$keywords.'&duration='.$duration.'&sort='.$sort;?>">首页 </a></li>
		</ul>
	</div>
<?php
}
?>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script src="jquery-ui/jquery-ui.js"></script>
<script>
$( "input[name='keywords']:first" ).autocomplete({source: "autocomplete.php"});
</script>

</body>
</html>
