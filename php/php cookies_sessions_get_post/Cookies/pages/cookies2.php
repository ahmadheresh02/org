<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Counter</title>
</head>
<body>
  <h1>You visited this page <?= isset($_COOKIE["counter"]) ? $_COOKIE["counter"] : 0 ?> times</h1>
</body>
</html>


<?php
$counter = isset($_COOKIE["counter"]) ? $_COOKIE["counter"] :0  ;
$counter++;
setcookie("counter", $counter);

?>