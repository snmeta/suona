<?php
function getcontent($keywords,$page){
	//关键词
	$query=urlencode($keywords);
	//用红色字体高亮
	$pre = urlencode("<font color='red'>");
	$post = urlencode("</font>");
	//一页显示多少条记录
	$rows=20;
	$start=($page-1)*$rows+1;
	
	
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
				$each[$k] = $value;
			}
		}
	}
	unset($each);
	$data = array();
	$data['result'] = $docs;
	$data['total'] = $total;
	$data['pages'] = $pages;
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