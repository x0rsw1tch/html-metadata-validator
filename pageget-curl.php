<?php
$curl = curl_init();
$timeout = 60;
$ret = "";
$url = $_GET["q"];
curl_setopt ($curl, CURLOPT_URL, $url);
curl_setopt ($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($curl, CURLOPT_MAXREDIRS, 2);
curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($curl, CURLOPT_USERAGENT, "htmlmetadatavalidator");
curl_setopt ($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
$text = curl_exec($curl);
echo $text;
?>