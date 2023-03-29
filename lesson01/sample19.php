<?php
// jsonは配列から作成することができる
$json_sample = [
  "title" => '',
  "items" => [
    'りんご',
    'ゴリラ',
    'ラッパ'
  ]
];


$json = json_encode($json_sample, JSON_UNESCAPED_UNICODE);
//encodeがコード化(配列をjson化),decodeがコード化を解除する（jsonを配列化）。
// json_encodeの第二引数によって記号を人が理解できるようにしている。
echo $json;
file_put_contents('json_sample.json', $json);
