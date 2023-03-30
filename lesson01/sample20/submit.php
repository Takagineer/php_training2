<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>
    <?php if (!empty($_REQUEST['my_name'])) : ?>
      <!-- $_GETを使用するのは、URLをシェアしたりする時。また、受け取り川で$_REQUESTを使用すると、
      URLから加工できたりするため、POST通信で送られたものに関しては受け取り側も＄＿POSTの方がよい。 -->
      お名前:<?php echo htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES); ?>
  </p>
<?php endif; ?>
</body>

</html>