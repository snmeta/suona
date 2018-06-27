<?php
function getcontent($keywords,$page){
	//关键词
	$query=urlencode($keywords);
	//用红色字体高亮
	$pre = urlencode("<font color='red'>");
	$post = urlencode("</font>");
	//一页显示多少条记录
	$rows=20;
	$start=($page-1)*$rows;
	
	
	//获取内容
	$serializedResult = file_get_contents('http://118.24.29.39:8983/solr/snmeta/select?q='.$query.'&wt=phps&start='.$start.'&rows='.$rows.'&hl.fl=*&hl=true&hl.simple.post='.$post.'&hl.simple.pre='.$pre);
	//序列化PHP能处理的数据格式
	$result = unserialize($serializedResult);
	//取得返回数据结果,包括内容，总记录数和页数
	$response = $result['response'];
	$total = $response['numFound'];
	$docs = $response['docs'];
	if($total%$rows==0)
		if($total==0) $pages=1;
		else  $pages=$Total/$rows;  
    else  
		$pages=(integer)($total/$rows)+1;  
	//取得高亮结果
	$highlighting = $result['highlighting'];
	//用高亮结果代替数据结果中应该被高亮的字段
	$re="/(\w+):\*/";
	if (!preg_match($re,$keywords)){
		foreach ($docs as &$each){
			foreach($highlighting[$each['id']] as $k=>$value){
				if($k=="id")
					continue;
				$each[$k] = $value;
			}
		}
	}
	unset($each);
	$data = array();
	$data['result'] = $docs;
	$data['total'] = $total;
	$data['pages'] = $pages;
	$data['highlighting'] = $highlighting;
	return $data;
	
}


function getfield($field){
	//判断这个键是否存在
	if (is_array($field)){
		foreach($field as $value){
			return $value;
		}
	}
	else{ return $field; }

}

//这个日期函数是处理Sun Nov 12 00:00:00 UTC 2017 格式的,browse页面是这个格式，但是我们从select页面获取的数据不是这种格式的
function todate($date) {
    //Sun Nov 12 00:00:00 UTC 2017
	$new = preg_split("/\s+/",$date); //根据空格切分成数组
	$month = array();
    $month["Jan"] = 1; $month["Feb"] = 2; $month["Mar"] = 3; $month["Apr"] = 4;
    $month["May"] = 5; $month["Jan"] = 6; $month["Jul"] = 7; $month["Aug"] = 8;
    $month["Sep"] = 9; $month["Oct"] = 10; $month["Nov"] = 11; $month["Dec"] = 12;
    $week =array();
    $week["Mon"] = "一"; $week["Tue"] = "二"; $week["Wed"] = "三"; $week["Thu"] = "四";
    $week["Fri"] = "五"; $week["Sat"] = "六"; $week["Sun"] = "日";
	//只有年月日的
	$nyr=$new[5].'-'.$month[$new[1]].'-'.$new[2];
	//有年月日时分秒的
	$nyrsfm = $nyr.'  '.$new[3];
	//有年月日时分秒和星期的
	$nursfmw = $nyrsfm.'  星期'.$week[$new[0]];
	$result = array();
	$result['nyr'] = $nyr;
	$result['nyrsfm'] = $nyrsfm;
	$result['nyrsfmw'] = $nursfmw;		
	return $result;
	
    } 

//处理2011-12-13T00:00:00Z格式的
function transdate($date){
	$new = preg_split("/[TZ]+/",$date);
	//只有年月日的
	$nyr=$new[0];
	//有年月日时分秒的
	$nyrsfm =$nyr.'  '.$new[1];
	
	$result = array();
	$result['nyr'] = $nyr;
	$result['nyrsfm'] = $nyrsfm;	
	return $result;	
}


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



/*
//日期函数举例
$date = todate("Sun Nov 12 00:00:00 UTC 2017");
print_r ($date);
echo '<br/>';
print_r ($date['nyr']);echo '<br/>';
print_r ($date['nyrsfm']);echo '<br/>';
print_r ($date['nyrsfmw']);echo '<br/>';
*/


/*
//输出内容示例
$result = getcontent($keywords);
foreach ($result as $one){
	echo getfield($one['id']);
	echo getfield($one['score_name']);
	//输出日期
	echo transdate(getfield($one['score_uploadDate']));	
	echo getfield($one['resource']);
	;
}*/
?>