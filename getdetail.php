<?php
include "getcontent.php";
function getdetail($keywords){
	//关键词
	$query=urlencode($keywords);
	//获取内容
	$serializedResult = file_get_contents('http://118.24.29.39:8983/solr/snmeta/select?q='.$query.'&wt=phps&rows=60');
	//序列化PHP能处理的数据格式
	$result = unserialize($serializedResult);
	//取得返回数据结果
	$response = $result['response'];
	$docs = $response['docs'];
	return $docs;
	
}

//全文检索页结果显示函数
function getkey($one,$highlighting){
	$re="/^[a-z]{1,10}\_name|caption|headline$/";
	foreach ($one as $k=>$value){
		if (preg_match($re,$k)) $key=$k;
		else continue;
		switch($key){
			case "article_headline":
				echo '<a href="article_detail.php?id='.getfield($one['id']).'"><h2><b>'.getfield($one[$key]).'</b></h2></a>';
				$id_temp = getfield($one['id']);
				$em_content = $highlighting[$id_temp];
				$em_content = $em_content['about'];
				for($i=0;$i<count($em_content);$i++){
					echo "...".$em_content[$i]."...";
				}
				if (isset($one['article_author'])){
					$des="作者：".getfield($one['article_author']);
				}else{
					$des = "作者：暂无";
				}
				$des = $des."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp来源：".getfield($one['articleSource']);
				echo "<p>".$des."</p>";
				echo "<p>结果类型：论文</p>";
				break;
			case "video_caption":
				echo '<table><tr><td>';
				echo '<image height="100" width="100" src="'.getfield($one['thumbnail']).'"/>';
				echo '</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>';
				echo '<a href="video_detail.php?id='.getfield($one['id']).'"><h2><b>'.getfield($one[$key]).'</b></h2></a><p>';
				if (isset($one['uploadDate'])){
					$date=transdate($one['uploadDate']);
					$des="更新时间：".$date['nyr'];
				}else{
					$des="更新时间：暂无";
				}
				$des = $des."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp来源：".getfield($one['resource']);
				echo $des."</p><p>结果类型：视频</p></td></tr></table>";
				break;
			case "baike_name":
				echo '<a href="baike_detail.php?id='.getfield($one['id']).'"><h2><b>'.getfield($one[$key]).'</b></h2></a>';
				$id_temp = getfield($one['id']);
				$em_content = $highlighting[$id_temp];
				$em_content = $em_content['baike_content'];
				for($i=0;$i<count($em_content);$i++){
					echo "...".$em_content[$i]."...";
				}
				if (isset($one['uploadDate'])){
					$date=transdate($one['uploadDate']); 
					$date['nyr'];
					$des = "更新日期：".$date['nyr'];
				}else{
					$des = "更新日期：暂无";
				}
				$des = $des."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp来源：".getfield($one['resource']);
				echo "<p>".$des."</p>";
				echo "<p>结果类型：百科</p>";
				break;
			case "person_name":
				echo '<a href="baike_detail.php?id='.getfield($one['id']).'"><h2><b>'.getfield($one[$key]).'</b></h2></a>';
				$id_temp = getfield($one['id']);
				$em_content = $highlighting[$id_temp];
				$em_content = $em_content['person_life'];
				for($i=0;$i<count($em_content);$i++){
					echo "...".$em_content[$i]."...";
				}
				echo "<p>结果类型：人物</p>";
				break;
			case "score_name":
				echo '<a href="score_detail.php?id='.getfield($one['id']).'"><h2><b>'.getfield($one[$key]).'</b></h2></a>';
				if (isset($one['uploadDate'])){
					$date=transdate($one['uploadDate']); 
					$date['nyr'];
					$des = "更新日期：".$date['nyr'];
				}else{
					$des = "更新日期：暂无";
				}
				$des = $des."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp来源：".getfield($one['resource']);
				echo "<p>".$des."</p>";
				echo "<p>结果类型：乐谱</p>";
				break;
			case "instrument_name":
				echo '<a href="instrument_detail.php?id='.getfield($one['id']).'"><h2><b>'.getfield($one[$key]).'</b></h2></a>';
				$id_temp = getfield($one['id']);
				$em_content = $highlighting[$id_temp];
				$em_content = $em_content['description'];
				for($i=0;$i<count($em_content);$i++){
					echo "...".$em_content[$i]."...";
				}
				if (isset($one['instrument_materials'])){
					$des = '材质：'.getfield($one['instrument_materials']);
				}else{
					$des = "材质：暂无";
				}
				$des = $des."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp来源：".getfield($one['resource']);
				echo "<p>".$des."</p>";
				echo "<p>结果类型：乐器</p>";
				break;
			case "music_name":
				echo '<a href="music_detail.php?id='.getfield($one['id']).'"><h2><b>'.getfield($one[$key]).'</b></h2></a>';
				$id_temp = getfield($one['id']);
				$em_content = $highlighting[$id_temp];
				$em_content = $em_content['music_about'];
				for($i=0;$i<count($em_content);$i++){
					echo "...".$em_content[$i]."...";
				}
				if (isset($one['music_byArtist'])){
					$des = "演奏者：".getfield($one['music_byArtist']);
				}else{
					echo "演奏者：暂无";
				}
				$des = $des."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp提供者：".getfield($one['provider']);
				echo "<p>".$des."</p>";
				echo "<p>结果类型：音乐</p>";
				break;
			case "news_name":
				echo '<a href="'.getfield($one['URL']).'"><h2><b>'.getfield($one[$key]).'</b></h2></a>';
				if (isset($one['uploadDate'])){
					$date=transdate($one['uploadDate']); 
					$date['nyr'];
					$des = "更新日期：".$date['nyr'];
				}else{
					$des = "更新日期：暂无";
				}
				$des = $des."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp来源：".getfield($one['resource']);
				echo "<p>".$des."</p>";
				echo "<p>结果类型：新闻</p>";
				break;			
			case "movie_name":
				echo '<table><tr><td>';
				echo '<image height="150" width="100" src="'.getfield($one['thumbnail']).'"/>';
				echo '</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>';
				echo '<a href="movie_detail.php?id='.getfield($one['id']).'"><h2><b>'.getfield($one[$key]).'</b></h2></a><p>';
				$id_temp = getfield($one['id']);
				$em_content = $highlighting[$id_temp];
				$em_content = $em_content['description'];
				for($i=0;$i<count($em_content);$i++){
					echo "...".$em_content[$i]."...";
				}
				if (isset($one['uploadDate'])){
					$des="导演：".$one['movie_director'];
				}else{
					$des="导演：暂无";
				}
				if (isset($one['date'])){
					$des="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp上映时间：".$one['date'].'年';
				}else{
					$des="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp上映时间：暂无";
				}
				echo $des."</p><p>结果类型：视频</p></td></tr></table>";
				break;
			default:
				echo "error";
		}	
	}
	return $name;
}
