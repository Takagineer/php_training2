<?php
$fruit = [
  'apple' => 'りんご',
  'grape' => '葡萄',
  'lemon' => 'レモン'
];
// echo $fruit['apple'];
?>

<dl>
  <?php foreach ($fruit as $english => $japanese) : ?>
    <dt><?php echo $english ?></dt>
    <dd><?php echo $japanese ?></dd>
  <?php endforeach; ?>
</dl>