<!-- jsonとは、もともとJavaScriptで使用するためのデータ形式であったが、使い勝手が良く近年ではさまざまな状況で使用される。 -->
<?php
$file = file_get_contents('json');
$json = json_decode($file);
//json_decodeはデータをphpで扱いやすいように分割する。
// echo $json->title;

foreach ($json->items as $item) : ?>
  ・<a href="<?php echo ($item->url); ?>"><?php echo $item->title; ?></a><br>
<?php
endforeach;
