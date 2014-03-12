<?php
$json = '{"message":"Hello, World!"}';

if (array_key_exists('callback', $_GET)) {
  header('Content-Type: application/javascript');
  echo $_GET['callback'] . '(' . $json . ');';
} else {
  header('Content-Type: application/json');
  echo $json;
}

