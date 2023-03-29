<?php
$xmlTree = simplexml_load_file('rss.xml');
// echo $xmlTree->channel->title;
foreach ($xmlTree->channel->item as $item) :
?>
  ・<?php echo $item->title; ?>
<?php
endforeach;
?>