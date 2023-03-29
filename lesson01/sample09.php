<?php
date_default_timezone_set('Asia/Tokyo');
// $time = time();
// $time = strtotime('+0 day');
// echo $time . '<br>';

// echo $time;
for ($i = 0; $i < 366; $i++) :
  // $time = strtotime('+1 day');
  $time = strtotime('+' . $i . 'day'); //文字列連結
  $time = strtotime("+$i day"); //ダブルクオテーション。シングルよりもゆるい。変数が入っていたっばいにはそれを展開する。
  $day = date('n/j(D)', $time);
  echo $day . '<br>';
endfor;
