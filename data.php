<?php

require_once './inc/config.php';
require_once './model/Digimon.php';

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://digimon-api.vercel.app/api/digimon",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_SSL_VERIFYPEER => false,
));
$response = json_decode(curl_exec($curl));
curl_close($curl);

Digimon::DeleteAll();

foreach($response as $digimon) {
  $res = Digimon::Create($digimon->name, $digimon->img, $digimon->level);
  var_dump($res);
}
