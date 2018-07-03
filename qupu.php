<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>唢呐荟萃：乐谱</title>
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
	<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
	<div class="am-collapse am-topbar-collapse" id="blog-collapse">
		<ul class="am-nav am-nav-pills am-topbar-nav" style="font-size:15px">
			<li><img  src="images/logo.png" alt="snhcmenta Logo"/></li>
			<li><a href="homepage.php">首页</a></li>
			<li><a href="music.php">唢呐乐曲</a></li>
			<li class="am-active"><a href="javascript:;">唢呐乐谱</a></li>
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
		<form class="am-topbar-form am-topbar-right am-form-inline" role="search" action="qupu.php" method="post">
			<div class="am-form-group">  
				<label>按曲谱类型筛选：</label>
					<?php
						if(!empty($_POST['score_type_author'])){
							$out=$_POST['score_type_author'];
						}else if(!empty($_GET['score_type_author'])){
							$r = explode(':',$_GET['score_type_author']);
							$out = $r[1];
						}else{
							$out='';
						}?>
						<select name="score_type_author">
						<?php
							if($out=='')
								echo '<option value="" selected>全部曲谱</option>';
							else
								echo '<option value="">全部曲谱</option>';
							if($out=="民歌曲谱")
								echo '<option value="民歌曲谱" selected>民歌曲谱</option>';
							else
								echo '<option value="民歌曲谱">民歌曲谱</option>';
							if($out=="少儿曲谱")
								echo '<option value="少儿曲谱" selected>少儿曲谱</option>';
							else
								echo '<option value="少儿曲谱">少儿曲谱</option>';
							if($out=="谱友记谱")
								echo '<option value="谱友记谱" selected>谱友记谱</option>';
							else
								echo '<option value="谱友记谱">谱友记谱</option>';
							if($out=="钢琴乐谱")
								echo '<option value="钢琴乐谱" selected>钢琴乐谱</option>';
							else
								echo '<option value="钢琴乐谱">钢琴乐谱</option>';
							if($out=="原创曲谱")
								echo '<option value="原创曲谱" selected>原创曲谱</option>';
							else
								echo '<option value="原创曲谱">原创曲谱</option>';
							if($out=="合唱曲谱")
								echo '<option value="合唱曲谱" selected>合唱曲谱</option>';
							else 
								echo '<option value="合唱曲谱">合唱曲谱</option>';
							if($out=="其他乐谱")
								echo '<option value="其他乐谱" selected>其他乐谱</option>';
							else
								echo '<option value="其他乐谱">其他乐谱</option>';
							if($out=="个人园地")
								echo '<option value="个人园地" selected>个人园地</option>';
							else
								echo '<option value="个人园地">个人园地</option>';
							if($out=="谱友上传")
								echo '<option value="谱友上传" selected>谱友上传</option>';
							else
								echo '<option value="谱友上传">谱友上传</option>';
							if($out=="粉蝶儿一堂")
								echo '<option value="粉蝶儿一堂" selected>粉蝶儿一堂</option>';
							else
								echo '<option value="粉蝶儿一堂">粉蝶儿一堂</option>';
							if($out=="五供养一堂")
								echo '<option value="五供养一堂" selected>五供养一堂</option>';
							else
								echo '<option value="五供养一堂">五供养一堂</option>';
							if($out=="拾牌名一堂")
								echo '<option value="拾牌名一堂" selected>拾牌名一堂</option>';
							else
								echo '<option value="拾牌名一堂">拾牌名一堂</option>';
							if($out=="工尺曲谱")
								echo '<option value="工尺曲谱" selected>工尺曲谱</option>';
							else
								echo '<option value="工尺曲谱">工尺曲谱</option>';
							if($out=="练习乐谱")
								echo '<option value="练习乐谱" selected>练习乐谱</option>';
							else
								echo '<option value="练习乐谱">练习乐谱</option>';
							if($out=="民间乐曲")
								echo '<option value="民间乐曲" selected>民间乐曲</option>';
							else
								echo '<option value="民间乐曲">民间乐曲</option>';
							if($out=="戏曲曲牌")
								echo '<option value="戏曲曲牌" selected>戏曲曲牌</option>';
							else
								echo '<option value="戏曲曲牌">戏曲曲牌</option>';
							if($out=="民乐类")
								echo '<option value="民乐类" selected>民乐类</option>';
							else
								echo '<option value="民乐类">民乐类</option>';
							if($out=="潮州音乐")
								echo '<option value="潮州音乐" selected>潮州音乐</option>';
							else
								echo '<option value="潮州音乐">潮州音乐</option>';
							if($out=="柳子戏曲牌")
								echo '<option value="柳子戏曲牌" selected>柳子戏曲牌</option>';
							else
								echo '<option value="柳子戏曲牌">柳子戏曲牌</option>';
							if($out=="泣颜回一堂")
								echo '<option value="泣颜回一堂" selected>泣颜回一堂</option>';
							else
								echo '<option value="泣颜回一堂">泣颜回一堂</option>';
							if($out=="醉花阴一堂")
								echo '<option value="醉花阴一堂" selected>醉花阴一堂</option>';
							else
								echo '<option value="醉花阴一堂">醉花阴一堂</option>';
							if($out=="八仙贺寿一堂")
								echo '<option value="八仙贺寿一堂" selected>八仙贺寿一堂</option>';
							else
								echo '<option value="八仙贺寿一堂">八仙贺寿一堂</option>';
							if($out=="普天乐一堂")
								echo '<option value="普天乐一堂" selected>普天乐一堂</option>';
							else
								echo '<option value="普天乐一堂">普天乐一堂</option>';
							if($out=="大还琢一堂")
								echo '<option value="大还琢一堂" selected>大还琢一堂</option>';
							else
								echo '<option value="大还琢一堂">大还琢一堂</option>';
					?>
				</select>
				<input type="text" class="am-form-field am-input-sm" name="keywords" placeholder="请输入需要搜索的乐谱" value="<?php 
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
        <h2 class="fl">唢呐乐谱</h2>
      </div>
	  <table class="am-table am-table-bordered">
    <thead>
        <tr>
            <th>曲谱名称</th>
			<th>曲谱类型/作者</th>
			<th>上传时间</th>
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
		$keywords = empty($_POST['keywords']) ? "score:*":"score:".$_POST['keywords'];
	}
	if(isset($_GET['score_type_author'])){
		$score_type_author = $_GET['score_type_author'];
	}else{
		$score_type_author = empty($_POST['score_type_author']) ? "":"score_type_author:".$_POST['score_type_author'];
	}
	$score_type_author = urlencode($score_type_author);
	$fqwords = 'fq='.$score_type_author;
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
				<td><a href="score_detail.php?id=<?php echo getfield($one['id']);?>"><?php echo getfield($one['score_name']);?></a></td>   
				<!--对于不确定有的字段，先判断这个字段有没有，再取值-->
				<td><?php 
				if (isset($one['score_type_author'])){ echo getfield($one['score_type_author']);}
				else {echo "--";}
				?></td>
				
				<td><?php 
				if (isset($one['uploadDate'])){ $date=transdate($one['uploadDate']); echo $date['nyr'];}
				else {echo "--";}
				?></td>
				
				<td><?php echo getfield($one['resource']);?></td>
			</tr>
	<?php }}?>	

	
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
			<li class="am-pagination-next"><a href="<?php echo 'qupu.php?page='.$pages.'&keywords='.$keywords ;?>">尾页</a>         </li>
			<li class="am-pagination-next"><a href="<?php echo 'qupu.php?page='.($page+1).'&keywords='.$keywords;?>">下一页</a></li>
			<li class="am-pagination-next"><a href="<?php echo 'qupu.php?page='.($page-1).'&keywords='.$keywords;?>">上一页</a></li>
			<li class="am-pagination-next"><a href="<?php echo 'qupu.php?page=1&keywords='.$keywords;?>">首页 </a></li>
		</ul>
	</div>
<?php
}
?>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
</body>
</html>
