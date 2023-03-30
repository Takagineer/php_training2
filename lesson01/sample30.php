<?php

function intax($value)
{
  return ceil($value * 1.1);
  //returnはfunction内等で使用する。functionの外に、returnでの戻り値をfunctionの結果として返す。
}
$price = 3000;
$price_tax = intax($price);
echo $price_tax;
