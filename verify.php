<?php
$access_token = 'AmsnuJIWAEbwgMShALpLrRjKpIIIL+M0Wz68k8zcr0iMktUAqxA6atAmH5Xrjt5muB49OympWJoPXb3BLuTNaFWchwoUyft1CM4LmJGmAYbaPPgrZ8C11X97UCf1pLGo739PV090Flpb0MW8ozdOzgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;