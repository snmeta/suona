<?php

function getcontent($keywords){
	//关键词
	$query=urlencode($keywords);
	
	
	//获取内容
	$serializedResult = file_get_contents('http://118.24.29.39:8983/solr/snmeta/suggest?q='.$query.'&wt=phps');
	//序列化PHP能处理的数据格式
	$result = unserialize($serializedResult);
	//取得返回数据结果,包括内容，总记录数和页数
	$response = $result['spellcheck'];
	$data = array();
	
	$data = $response['suggestions'][$keywords]['suggestion'];

	return json_encode($data);
	
}

$term = $_GET['term'];

echo getcontent($term);


?>