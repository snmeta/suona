<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>唢呐荟萃：文章</title>
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
			<li><a href="instrument.php">唢呐乐器</a></li>
			<li class="am-active"><a href="javascript:;">唢呐文章</a></li>
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
<!-- nav end -->
<hr>
<div class="w1000 auto ovh">
    <div class="column_box">
	<!--搜索框-->
	<form class="am-topbar-form am-topbar-right am-form-inline" role="search" action="article.php" method="post">
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
							if($out=="publicationDate asc")
								echo '<option value="publicationDate asc" selected>按日期升序</option>';
							else
								echo '<option value="publicationDate asc">按日期升序</option>';
							if($out=="publicationDate desc")
								echo '<option value="publicationDate desc" selected>按日期降序</option>';
							else
								echo '<option value="publicationDate desc">按日期降序</option>';
							if($out=="download asc")
								echo '<option value="download asc" selected>按下载量升序</option>';
							else
								echo '<option value="download asc">按下载量升序</option>';
							if($out=="download desc")
								echo '<option value="download desc" selected>按下载量降序</option>';
							else
								echo '<option value="download desc">按下载量降序</option>';
					?>
				</select>			
			<label>按文章类型筛选：</label>
				<?php
						if(!empty($_POST['article_publitionType'])){
							$out=$_POST['article_publitionType'];
						}else if(!empty($_GET['article_publitionType'])){
							$r = explode(':',$_GET['article_publitionType']);
							$out = $r[1];
						}else{
							$out='';
						}?>
						<select name="article_publitionType">
						<?php
							if($out=='')
								echo '<option value="" selected>全部文章</option>';
							else
								echo '<option value="">全部文章</option>';
							if($out=="期刊")
								echo '<option value="期刊" selected>期刊</option>';
							else
								echo '<option value="期刊">期刊</option>';
							if($out=="报纸")
								echo '<option value="报纸" selected>报纸</option>';
							else
								echo '<option value="报纸">报纸</option>';
							if($out=="会议")
								echo '<option value="会议" selected>会议</option>';
							else
								echo '<option value="会议">会议</option>';
							if($out=="硕士")
								echo '<option value="硕士" selected>硕士论文</option>';
							else
								echo '<option value="硕士">硕士论文</option>';
							if($out=="博士")
								echo '<option value="博士" selected>博士论文</option>';
							else
								echo '<option value="博士">博士论文</option>';
					?>
				</select>
				<input type="text" class="am-form-field am-input-sm" name="keywords" placeholder="请输入需要搜索的文章" value="<?php 
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
        <h2 class="fl">唢呐文章</h2>
      </div>
	  <table class="am-table am-table-bordered">
    <thead>
        <tr>
            <th><center>文章标题</center></th>
			<th><center>文章作者</center></th>
			<th><center>文章类型</center></th>
			<th><center>文章简介</center></th>
            <th><center>文章日期</center></th>
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
		$keywords = empty($_POST['keywords']) ? "article:*":"article:".$_POST['keywords'];
	}
	if(isset($_GET['article_publitionType'])){
		$article_publitionType = $_GET['article_publitionType'];
	}else{
		$article_publitionType = empty($_POST['article_publitionType']) ? "":"article_publitionType:".$_POST['article_publitionType'];
	}
	$article_publitionType = urlencode($article_publitionType);
	if(isset($_GET['sort'])){
		$sort = $_GET['sort'];
		$sort = urlencode($sort);
		if($sort!="")
			$fqwords = 'fq='.$article_publitionType.'&sort='.$sort;
		else
			$fqwords = 'fq='.$article_publitionType;
	}else if(isset($_POST['sort'])){
		$sort = $_POST['sort'];
		$sort = urlencode($sort);
		if($sort!="")
			$fqwords = 'fq='.$article_publitionType.'&sort='.$sort;
		else
			$fqwords = 'fq='.$article_publitionType;
	}else{
			$fqwords = 'fq='.$article_publitionType;
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
                <!--文章标题-->
				<td width="150"><a href="article_detail.php?id=<?php echo getfield($one['id']);?>"><center><?php echo getfield($one['article_headline']);?></center></a></td>
                <!--文章作者-->
				<td width="80"><center><?php echo getfield($one['article_author']);?></center></td>
				<!--对于不确定有的字段，先判断这个字段有没有，再取值-->
                <!--文章类型-->
				<td width="100"><?php 
				if (isset($one['article_publitionType'])){ echo "<center>".getfield($one['article_publitionType'])."</center>";}
				else {echo "<center>--</center>";}
				?></td>
				<!--文章简介-->
				<td><?php 
				if (isset($one['about'])){echo getfield($one['about']);}
				else {echo "<center>--</center>";}
				?></td>
				<!--日期-->
				<td width="100">
				<?php if (isset($one['publicationDate'])){
						$date=transdate($one['publicationDate']); 
						echo "<center>".$date['nyr']."</center>";
					}else{
						echo "<center>--</center>";
					}?>
				</td>
			</tr>
	<?php }}?>	

	
    </tbody>
</table>
</div>
</div>

<!-- 分页-->
<div class="am-g am-g-fixed ">
	<ul class="am-pagination am-avg-sm-8 am-g-centered">
		<li class="am-pagination-next"><a href="<?php echo $_SERVER["PHP_SELF"].'?page='.$pages.'&keywords='.$keywords.'&article_publitionType='.$article_publitionType.'&sort='.$sort;?>">尾页 </a>         </li>
		<li class="am-pagination-next"><a href="<?php echo $_SERVER["PHP_SELF"].'?page='.($page+1).'&keywords='.$keywords.'&article_publitionType='.$article_publitionType.'&sort='.$sort;?>">下一页 </a>         </li>
		<li class="am-pagination-next"><a href="<?php echo $_SERVER["PHP_SELF"].'?page='.($page-1).'&keywords='.$keywords.'&article_publitionType='.$article_publitionType.'&sort='.$sort;?>">上一页</a>         </li>
		<li class="am-pagination-next"><a href="<?php echo $_SERVER["PHP_SELF"].'?page=1&keywords='.$keywords.'&article_publitionType='.$article_publitionType.'&sort='.$sort;?>">首页 </a>         </li>
	</ul>
</div>
<!-- content end -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script src="jquery-ui/jquery-ui.js"></script>
<script>
$( "input[name='keywords']:first" ).autocomplete({source: "autocomplete.php"});
</script>
</body>
</html>
