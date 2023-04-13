<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>memo詳細</title>
</head>

<body>
  <?php
  require('dbconnect.php');
  $stmt = $db->prepare('select * from memos where id = ?');
  if (!$stmt) {
    die($db->error);
  }
  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
  // $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
  if (!$id) {
    echo 'メモを選択してください';
    exit();
  }
  $stmt->bind_param('i', $id);
  // ↑bind_paramの第二引数には直接の値を入れることはできない
  $stmt->execute();
  $stmt->bind_result($id, $memo, $created);
  $result = $stmt->fetch();
  if (!$result) {
    echo '指定されたメモはありませんでした。';
    exit();
  }

  ?>
  <div>
    <pre>
    <?php echo htmlspecialchars($memo); ?></pre>
  </div>
  <a href="update.php?id=<?php echo $id; ?>">編集する</a> |
  <a href="delete.php?id=<?php echo $id; ?>">削除する</a> |
  <a href="/memo">一覧ページへ</a>
</body>

</html>