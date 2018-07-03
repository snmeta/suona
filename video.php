<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>唢呐荟萃：视频</title>
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
<script>

</script>
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
			<li><a href="music.php">唢呐乐曲</a></li>
			<li><a href="qupu.php">唢呐乐谱</a></li>
			<li class="am-active"><a href="javascript:;">唢呐视频</a></li>
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
		<form class="am-topbar-form am-topbar-right am-form-inline" role="search" action="video.php" method="post">
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
							if($out=="play_count asc")
								echo '<option value="play_count asc" selected>按播放次数升序</option>';
							else
								echo '<option value="play_count asc">按播放次数升序</option>';
							if($out=="play_count desc")
								echo '<option value="play_count desc" selected>按播放次数降序</option>';
							else
								echo '<option value="play_count desc">按播放次数降序</option>';
					?>
				</select>
				<label>按视频类型筛选：</label>
					<?php
						if(!empty($_POST['video_type'])){
							$out=$_POST['video_type'];
						}else if(!empty($_GET['video_type'])){
							$r = explode(':',$_GET['video_type']);
							$out = $r[1];
						}else{
							$out='';
						}?>
						<select name="video_type">
						<?php
							if($out=='')
								echo '<option value="" selected>请选择视频类型</option>';
							else
								echo '<option value="">请选择视频类型</option>';
							if($out=="唢呐")
								echo '<option value="唢呐" selected>唢呐</option>';
							else
								echo '<option value="唢呐">唢呐</option>';
							if($out=="唢呐情")
								echo '<option value="唢呐情" selected>唢呐情</option>';
							else
								echo '<option value="唢呐情">唢呐情</option>';
							if($out=="唢呐声声")
								echo '<option value="唢呐声声" selected>唢呐声声</option>';
							else
								echo '<option value="唢呐声声">唢呐声声</option>';
							if($out=="视频教程")
								echo '<option value="视频教程" selected>视频教程</option>';
							else
								echo '<option value="视频教程">视频教程</option>';
							if($out=="唢呐演奏")
								echo '<option value="唢呐演奏" selected>唢呐演奏</option>';
							else
								echo '<option value="唢呐演奏">唢呐演奏</option>';
							if($out=="唢呐独奏")
								echo '<option value="唢呐独奏" selected>唢呐独奏</option>';
							else 
								echo '<option value="唢呐独奏">唢呐独奏</option>';
							if($out=="百鸟朝凤")
								echo '<option value="百鸟朝凤" selected>百鸟朝凤</option>';
							else
								echo '<option value="百鸟朝凤">百鸟朝凤</option>';
							if($out=="陕北唢呐")
								echo '<option value="陕北唢呐" selected>陕北唢呐</option>';
							else
								echo '<option value="陕北唢呐">陕北唢呐</option>';
							if($out=="丧葬曲目")
								echo '<option value="丧葬曲目" selected>丧葬曲目</option>';
							else
								echo '<option value="丧葬曲目">丧葬曲目</option>';
							if($out=="民间小调/民间乐曲")
								echo '<option value="民间小调/民间乐曲" selected>民间小调/民间乐曲</option>';
							else
								echo '<option value="民间小调/民间乐曲">民间小调/民间乐曲</option>';
							if($out=="婚庆曲目")
								echo '<option value="婚庆曲目" selected>婚庆曲目</option>';
							else
								echo '<option value="婚庆曲目">婚庆曲目</option>';
							if($out=="唢呐合奏")
								echo '<option value="唢呐合奏" selected>唢呐合奏</option>';
							else
								echo '<option value="唢呐合奏">唢呐合奏</option>';
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
				<input type="text" class="am-form-field am-input-sm" name="keywords" placeholder="请输入需要搜索的视频" value="<?php 
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
			<h2 class="fl">唢呐视频</h2><a href=""> </a>
		</div>
		<table class="am-table am-table-bordered">
			<tbody>
			<?php
				//获取搜索结果并输出
				include "getcontent.php" ;
				//获取搜索关键词
				if (isset($_GET['keywords'])){
					$keywords = $_GET['keywords'];
				}else{ 
					$keywords = empty($_POST['keywords']) ? "video:*":"video:".$_POST['keywords'];
				}
				if(isset($_GET['video_type'])){
					$video_type = $_GET['video_type'];
				}else{
					$video_type = empty($_POST['video_type']) ? "video_type:*":"video_type:".$_POST['video_type'];
				}
				$video_type = urlencode($video_type);
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
						$fqwords = 'fq='.$duration.'&fq='.$video_type.'&sort='.$sort;
					else
						$fqwords = 'fq='.$duration.'&fq='.$video_type;
				}else if(isset($_POST['sort'])){
					$sort = $_POST['sort'];
					$sort = urlencode($sort);
					if($sort!="")
						$fqwords = 'fq='.$duration.'&fq='.$video_type.'&sort='.$sort;
					else
						$fqwords = 'fq='.$duration.'&fq='.$video_type;
				}else{
					$fqwords = 'fq='.$duration.'&fq='.$video_type;
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
					$i=0;
					for($i;$i<count($result);){
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
			<li class="am-pagination-next"><a href="<?php echo 'video.php?page='.$pages.'&keywords='.$keywords.'&duration='.$duration.'&video_type='.$video_type.'&sort='.$sort;?>">尾页 </a>         </li>
			<li class="am-pagination-next"><a href="<?php echo 'video.php?page='.($page+1).'&keywords='.$keywords.'&duration='.$duration.'&video_type='.$video_type.'&sort='.$sort;?>">下一页 </a>         </li>
			<li class="am-pagination-next"><a href="<?php echo 'video.php?page='.($page-1).'&keywords='.$keywords.'&duration='.$duration.'&video_type='.$video_type.'&sort='.$sort;?>">上一页</a>         </li>
			<li class="am-pagination-next"><a href="<?php echo 'video.php?page=1&keywords='.$keywords.'&duration='.$duration.'&video_type='.$video_type.'&sort='.$sort;?>">首页 </a>         </li>
		</ul>
	</div>
<?php
}
?>
<!-- content end -->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
</body>
</html>
