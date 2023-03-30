<?php
$age = '３０';
$age = mb_convert_kana($age, 'n', 'UTF-8');
// ↑第二引数の指定によって様々な形式に変換する

if (is_numeric($age)) {
  echo $age . '歳です';
} else {
  echo '数字を入力してください';
}
