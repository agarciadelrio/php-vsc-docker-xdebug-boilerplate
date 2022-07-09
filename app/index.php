<?php
$title = "HELLO WORLD";
$sub = "THE SUBTITLE";
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
  <h1><?= $title ?></h1>
  <h2><?= $sub ?></h2>
  <pre><?= file_get_contents('/app/php.ini') ?></pre>
  <?php
  phpinfo()
  ?>
</body>
</html>


