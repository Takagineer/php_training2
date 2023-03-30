<?php
session_start();
$_SESSION['message'] = 'セッションに保存した値です';
session_regenerate_id();

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="page02.php">２ページ目</a>
</body>

</html>