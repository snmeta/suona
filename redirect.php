<?php
include "getcontent.php";
$keywords=$_GET["keywords"];
$data=getcontent($keywords,1);
$result = $data['result'][0];
$post = "person_detail.php?id=".$result['id'];
header("location:".$post);
?>