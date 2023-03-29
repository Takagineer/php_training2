<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>
<?php if ($time < 30) : ?>
  <p>営業時間外</p>
<?php else : ?>
  <p>ようこそ</p>
<?php endif; ?>

<?php
$s = 'aiueo';
if ($s !== '') : //if($s)だけでもいい。変数に何か入っていることと同義
  echo '＄sには文字が入っている';
endif;
