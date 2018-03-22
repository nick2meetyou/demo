<?php
  $access_token = 'NE8U+tIMQayHvkZ4JpIjVAhld8vu5RheOKdZHkYkkzJZP6MTaZqjf7bOqL4nD19kOAQZMacGDXb0jx5cC7aLywrijb4XwNXvVv2aWVzkqHbP2tjox8xVTde8qMMDzek+dNgaVs+w2pmLveeFn07tcAdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/oauth2/v2.1/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);
  curl_close($ch);
  echo $result;
?>
