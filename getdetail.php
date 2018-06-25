<?php
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

function getfield($field){
	//判断这个键是否存在
	if (is_array($field)){
		foreach($field as $value){
			return $value;
		}
	}
	else{ return $field; }

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