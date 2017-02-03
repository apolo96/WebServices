<?php
require("github-creds.php");

$data = json_encode(
[
  'description'=>'Gist created by API',
  'public'=>'true',
  'files'=>[
    'text.txt'=>[
      'content'=>'some riventing text'
      ]
    ]
]
);

$url = "http://api.github.com/gist";
$ch = curl_init($url);

curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch,CURLOPT_HTTPHEADER,[
  'Content-Type: application/javascript',
  'Authorization: Token '.$acces_token,
  'User-Agent: php-curl'
]);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($ch);
curl_close($ch);

$gist = json_decode($result);
if($gist){
  echo "Your gist is at ".$gist['html_url'];
}
?>
