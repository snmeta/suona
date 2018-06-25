<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>BLOG index with sidebar & slider  | Amaze UI Examples</title>
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
	  <li class=""><a href="">首页</a></li>
      <li class="am-active"><a href="lw-index.html">唢呐乐曲</a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" href="javascript:;">唢呐乐谱 </a></li>
      <li><a href="lw-article.php">唢呐视频</a></li>
      <li><a href="lw-img.php">唢呐教程</a></li>
      <li><a href="lw-article-fullwidth.php">唢呐名家</a></li>
      <li><a href="lw-timeline.php">唢呐百科</a></li>
	  <li><a href="">唢呐乐器</a></li>
	  <li><a href="">唢呐文章</a></li>
    </ul>
    <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
      <div class="am-form-group">
        <input type="text" class="am-form-field am-input-sm" placeholder="请输入需要搜索的内容">
      </div>
    </form>
  </div>
</nav>
<hr>
         <div class="w1000 auto ovh">
        <div class="column_box">
		 <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
      <div class="am-form-group">
        <input type="text" class="am-form-field am-input-sm" placeholder="请输入需要搜索的乐曲">
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
	//获取当前页数
	$page = empty($_GET['page']) ? 1:$_GET['page'];
	//获取结果和总记录数、总页数
	$data=getcontent($keywords,$page);
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
				<td><a href="<?php echo getfield($one['isBasedOn']);?>"><?php echo getfield($one['music_name']);?></a></td>   
				<!--对于不确定有的字段，先判断这个字段有没有，再取值-->
				<td><?php 
				if (isset($one['music_byArtist'])){ echo getfield($one['music_byArtist']);}
				else {echo "--";}
				?></td>
				
				<td><?php 
				if (isset($one['duration'])){ echo getfield($one['duration']);}
				else {echo "--";}
				?></td>
				
				<td><?php echo getfield($one['provider']);?></td>
			</tr>
	<?php }
    }?>	

	
    </tbody>
</table>
</div>
</div>
		<!-- 分页-->
<div class="am-g am-g-fixed ">
	<ul class="am-pagination am-avg-sm-8 am-g-centered">
		<li class="am-pagination-next"><a href="<?php echo 'music.php?page='.$pages.'&keywords='.$keywords ;?>">尾页 </a>         </li>
		<li class="am-pagination-next"><a href="<?php echo 'music.php?page='.($page+1).'&keywords='.$keywords;?>">下一页 </a>         </li>
		<li class="am-pagination-next"><a href="<?php echo 'music.php?page='.($page-1).'&keywords='.$keywords;?>">上一页</a>         </li>
		<li class="am-pagination-next"><a href="<?php echo 'music.php?page=1&keywords='.$keywords;?>">首页 </a>         </li>
	</ul>
</div>
<!-- content end -->


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