<?php
$access_token = 'ki3KuOG8/YEahJovYylMjjeHBbTigV7Y9CiKIRxFXbb8OIRsnFSE/KkPf8082cts5rEyqcL3Ngo/MeqnFhZfe3ipVzviIosmvf8LO0yuaonrT5PzgB5MKVAnGxOOFSOVjJc2fGpGiNBeSw7q7tAlkQdB04t89/1O/w1cDnyilFU=';
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$access_token}";

if($arrJson['events'][0]['message']['text'] == "สวัสดี"||$arrJson['events'][0]['message']['text'] == "ดี"||$arrJson['events'][0]['message']['text'] == "ดีจ้า"||$arrJson['events'][0]['message']['text'] == "หวัดดี"
  ||$arrJson['events'][0]['message']['text'] == "Hi"||$arrJson['events'][0]['message']['text'] == "Hello"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีเราเอง";
