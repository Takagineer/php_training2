<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>予約日</h2>
  <?php if (!empty($_REQUEST['reserve'])) : ?>
    <!-- <?php echo $_REQUEST['reserve']; ?>
  ↑これは配列で渡ってきているのでいきなりechoはできない -->
    <?php $reserves = $_REQUEST['reserve']; ?>
    <ul>
      <?php foreach ($reserves as $reserve) : ?>
        <li><?php echo htmlspecialchars($reserve, ENT_QUOTES); ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</body>

</html>