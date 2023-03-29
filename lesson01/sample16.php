<?php
$news = file_get_contents('data/news.text');
echo $news;

//ファイルのついき
$news = $news . "<br>追加ですよ";
$success = file_put_contents('data/news.text', $news);
echo $success;

// readfile('data/news.text');//ただ読むだけだとこれでもいい
