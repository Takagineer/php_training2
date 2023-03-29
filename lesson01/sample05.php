<?php
$today = new DateTime();
$today->setTimezone(new DateTimeZone('Asia/Tokyo'));
echo '現在は' . $today->format('G時 i分 s秒') . 'です';

// プログラミング言語は構造化プログラミング言語であったが、オブジェクト指向になった
// PHPはその両方の性質を持ち合わせている。一見記述が難しそうであるが管理がしやすい