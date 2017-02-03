<?php
$url = "http://localhost/CursoWs/RPC/ws_events.php";
$dataEvents = array("method"=>"eventList");
$dataEventsById = array("method"=>"event","eventID"=>2);
$getUrl = $url.'?'.http_build_query($dataEventsById);
$ch = curl_init($getUrl);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result = curl_exec($ch);
$info = curl_getinfo($ch);
if($info['http_code'] == 200){
  echo $result;
}else{
  print 'Error: '.curl_errno($ch)." http: ".$info['http_code'];
}
?>
