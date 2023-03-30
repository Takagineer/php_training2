<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="submit.php" method="post">
    <h2>予約希望日</h2>
    <ul>
      <li>
        <label for="">
          <input type="checkbox" name="reserve[]" value="1/1">1月1日
          <!-- phpでチェックボックスを利用する際には、必ず配列として値が渡されるので[]を使用する -->
        </label>
      </li>
      <li>
        <label for="">
          <input type="checkbox" name="reserve[]" value="1/2">1月2日
        </label>
      </li>
      <li>
        <label for="">
          <input type="checkbox" name="reserve[]" value="1/3">1月3日
        </label>
      </li>
    </ul>
    <input type="submit" value="送信する">
  </form>
</body>

</html>