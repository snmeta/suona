<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>唢呐荟萃：乐器</title>
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
			<li><a href="video.php">唢呐视频</a></li>
			<li><a href="movie.php">唢呐电影</a></li>
			<li><a href="person.php">唢呐名家</a></li>
			<li><a href="baike.php">唢呐百科</a></li>
			<li class="am-active"><a href="javascript:;">唢呐乐器</a></li>
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
		<form class="am-topbar-form am-topbar-right am-form-inline" role="search" action="instrument.php" method="post">
			<div class="am-form-group">  
				<label>按乐器音调筛选：</label>
				<?php
						if(!empty($_POST['instrument_toneRange_copy'])){
							$out=$_POST['instrument_toneRange_copy'];
						}else if(!empty($_GET['instrument_toneRange_copy'])){
							$r = explode(':',$_GET['instrument_toneRange_copy']);
							$out = $r[1];
						}else{
							$out='';
						}?>
						<select name="instrument_toneRange_copy">
						<?php
							if($out=='')
								echo '<option value="" selected>请选择音调</option>';
							else
								echo '<option value="">请选择音调</option>';
							if($out=="A调")
								echo '<option value="A调" selected>A调</option>';
							else
								echo '<option value="A调">A调</option>';
							if($out=="降A调")
								echo '<option value="降A调" selected>降A调</option>';
							else
								echo '<option value="降A调">降A调</option>';
							if($out=="降B调")
								echo '<option value="降B调" selected>降B调</option>';
							else
								echo '<option value="降B调">降B调</option>';
							if($out=="C调")
								echo '<option value="C调" selected>C调</option>';
							else
								echo '<option value="C调">C调</option>';
							if($out=="D调")
								echo '<option value="D调" selected>D调</option>';
							else
								echo '<option value="D调">D调</option>';
							if($out=="E调")
								echo '<option value="E调" selected>E调</option>';
							else
								echo '<option value="E调">E调</option>';
							if($out=="降E调")
								echo '<option value="降E调" selected>降E调</option>';
							else
								echo '<option value="降E调">降E调</option>';
							if($out=="F调")
								echo '<option value="F调" selected>F调</option>';
							else
								echo '<option value="F调">F调</option>';
							if($out=="大G调")
								echo '<option value="大G调" selected>大G调</option>';
							else
								echo '<option value="大G调">大G调</option>';
							if($out=="小G调")
								echo '<option value="小G调" selected>小G调</option>';
							else
								echo '<option value="小G调">小G调</option>';
					?>
				</select>
				<input type="text" class="am-form-field am-input-sm" name="keywords" placeholder="请输入需要搜索的乐器" value="<?php 
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
			<h2 class="fl">唢呐乐器</h2><a href=""> </a>
		</div>
		<!-- content srart -->
		<table class="am-table am-table-bordered">
			<thead>
				<tr>
					<th>乐器名称</th>
					<th>材质</th>
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
					$keywords = empty($_POST['keywords']) ? "instrument:*":"instrument:".$_POST['keywords'];
				}
				if(isset($_GET['instrument_toneRange_copy'])){
					$instrument_toneRange_copy = $_GET['instrument_toneRange_copy'];
				}else{
					$instrument_toneRange_copy = empty($_POST['instrument_toneRange_copy']) ? "":"instrument_toneRange_copy:".$_POST['instrument_toneRange_copy'];
				}
				$instrument_toneRange_copy = urlencode($instrument_toneRange_copy);
				$fqwords = 'fq='.$instrument_toneRange_copy;
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
							<td><a href="instrument_detail.php?id=<?php echo getfield($one['id']);?>"><?php echo getfield($one['instrument_name']);?></a></td> 
							<!--对于不确定有的字段，先判断这个字段有没有，再取值-->
							<td><?php 
								if (isset($one['instrument_materials'])){
									echo getfield($one['instrument_materials']);
								}else{
									echo "--";
								}
						?>	</td>
							<td><?php echo getfield($one['resource']);?></td>
						</tr>
			<?php	}
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
			<li class="am-pagination-next"><a href="<?php echo 'instrument.php?page='.$pages.'&keywords='.$keywords.'&instrument_toneRange_copy'.$instrument_toneRange_copy;?>">尾页</a>         </li>
			<li class="am-pagination-next"><a href="<?php echo 'instrument.php?page='.($page+1).'&keywords='.$keywords.'&instrument_toneRange_copy'.$instrument_toneRange_copy;?>">下一页</a></li>
			<li class="am-pagination-next"><a href="<?php echo 'instrument.php?page='.($page-1).'&keywords='.$keywords.'&instrument_toneRange_copy'.$instrument_toneRange_copy;?>">上一页</a></li>
			<li class="am-pagination-next"><a href="<?php echo 'instrument.php?page=1&keywords='.$keywords.'&instrument_toneRange_copy'.$instrument_toneRange_copy;?>">首页 </a></li>
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
