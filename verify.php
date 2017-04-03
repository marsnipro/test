<?php
$access_token = 'AyKHjpRDJ1X0V0ahTbLZlLtqjQS6i5P9dkF9z6zObq4e4TmnKG46ZJyLk49YpuIBWbPTcY32SDsQrXPoKnRnkZPN8lWHF+9rPYS3VlnooRVehRAyE7vR0QtpDO0hkhTUufQKZzYnfZoUmjO0Y/lG0AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
