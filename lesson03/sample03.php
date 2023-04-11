<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php $db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
  $ret = $db->query('insert into memos(memo)values ("phpからのメモです")');
  // valueの値等でDBのデータを壊されたりする可能性があるため、基本的にはqueryを使用しない
  if ($ret) {
    echo 'データをそうにゅうしました';
  } else {
    echo $db->error;
  }
  ?>

</body>

</html>