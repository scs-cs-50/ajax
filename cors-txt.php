<?php
// allow CORS requests from the class github.io page
// NOTE: this only allows access from http://scs-cs-50.github.io
//       access from https://scs-cs-50.github.io will be denied
header('Content-Type: text/plain');
header('Access-Control-Allow-Origin: http://scs-cs-50.github.io');
?>Hello, World!