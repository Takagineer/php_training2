<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="submit.php" method="post" enctype="multipart/form-data">
    <!-- formで画像ファイルのアップロードするにはinput属性にenctype="multipart/form-data"を指定することで
   テキスト以外の画像ファイル等を送ることができる-->
    <label>写真
      <input type="file" name="picture">
    </label>
    <input type="submit" value="送信する">
  </form>

</body>

</html>