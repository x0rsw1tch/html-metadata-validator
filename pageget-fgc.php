<?php
$url = $_GET["q"];
$fp = file_get_contents($url);
echo $fp;
?>