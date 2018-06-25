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
      <li class="am-dropdown" ><a href="javascript:;">唢呐乐谱 </a></li>
      <li><a href="lw-article.php">唢呐视频</a></li>
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
	<!--搜索框-->
	<form class="am-topbar-form am-topbar-right am-form-inline" role="search" action="qupu.php" method="post">
      <div class="am-form-group">  
        <input type="text" class="am-form-field am-input-sm" name="keywords" placeholder="请输入需要搜索的乐谱"></input>
		<button type="submit" name="submit" class="am-btn am-btn-secondary am-btn-sm">搜索</button>
      </div>
    </form>
      <div class="title1 cf">
        <h2 class="fl">唢呐曲谱</h2>
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
				<td><a href="detail.php?id=<?php echo getfield($one['id']);?>"><?php echo getfield($one['score_name']);?></a></td>   
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
<div class="am-g am-g-fixed ">
	<ul class="am-pagination am-avg-sm-8 am-g-centered">
		<li class="am-pagination-next"><a href="<?php echo 'qupu.php?page='.$pages.'&keywords='.$keywords ;?>">尾页 </a>         </li>
		<li class="am-pagination-next"><a href="<?php echo 'qupu.php?page='.($page+1).'&keywords='.$keywords;?>">下一页 </a>         </li>
		<li class="am-pagination-next"><a href="<?php echo 'qupu.php?page='.($page-1).'&keywords='.$keywords;?>">上一页</a>         </li>
		<li class="am-pagination-next"><a href="<?php echo 'qupu.php?page=1&keywords='.$keywords;?>">首页 </a>         </li>
	</ul>
</div>
<!-- content end -->



  <!--<footer class="blog-footer">
    <div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-footer-padding">
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>模板简介</h3>
            <p class="am-text-sm">这是一个使用amazeUI做的简单的前端模板。<br> 博客/ 资讯类 前端模板 <br> 支持响应式，多种布局，包括主页、文章页、媒体页、分类页等<br>嗯嗯嗯，不知道说啥了。外面的世界真精彩<br><br>
            Amaze UI 使用 MIT 许可证发布，用户可以自由使用、复制、修改、合并、出版发行、散布、再授权及贩售 Amaze UI 及其副本。</p>
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>社交账号</h3>
            <p>
                <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-github am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-weibo am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-reddit am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-weixin am-icon-fw blog-icon blog-icon"></span></a>
            </p>
            <h3>Credits</h3>
            <p>我们追求卓越，然时间、经验、能力有限。Amaze UI 有很多不足的地方，希望大家包容、不吝赐教，给我们提意见、建议。感谢你们！</p>          
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
              <h1>我们站在巨人的肩膀上</h1>
             <h3>Heroes</h3>
            <p>
                <ul>
                    <li>jQuery</li>
                    <li>Zepto.js</li>
                    <li>Seajs</li>
                    <li>LESS</li>
                    <li>...</li>
                </ul>
            </p>
        </div>
    </div>    
    <div class="blog-text-center">© 2015 AllMobilize, Inc. Licensed under MIT license. Made with love By LWXYFER</div>    
  </footer>

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