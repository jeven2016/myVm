<?php
header("Content-Type:image/jpeg");
@$picurl = "http://image-service:5806/image-service/show?tu=".$_GET['tu'];
echo getnepianImg($picurl);
function getnepianImg($url){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	$data=curl_exec($ch);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, '20');
	return $data;
	curl_close($ch);
}
exit; 
?>
