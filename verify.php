<?php
  $access_token = 'vINbFh21yiQmlEokfzp8mBvY0XekEe84XZb0nNAz9Gs5CwVcUE62hGJQctcbytu1OAQZMacGDXb0jx5cC7aLywrijb4XwNXvVv2aWVzkqHaI4e6Uuy02v++p+uM8bKXiXu0qgUH3u/1LeNRuLppkBAdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v2/bot/message/reply';
  $messages = [
    'type' => 'text',
    'text' => 'Hi We are Sabotenstore'
    ];
  $data = [
    'replyToken' => $access_token,
    'messages' = > [$messages]
    ];
  $post = json_encode($data);
  $headers = array('Content-Type': application/json','Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch)
  ;curl_close($ch);
  echo $result;
?>
