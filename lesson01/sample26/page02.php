<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- 変数：<?php echo $value; ?> -->
  <!-- ↑webにおいて変数はページが切り替わると破棄されてしまう -->
  変数：<?php echo $_COOKIE['message']; ?>
</body>

</html>