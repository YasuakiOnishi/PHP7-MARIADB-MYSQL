<?php
$data = array("りんご","みかん","かき");
  list($fruit0,$fruit1,$fruit2) = $data;

//上のコードと同じ意味です。
$fruit0 = $data[0];
var_dump($fruit0);
$fruit1 = $data[1];
var_dump($fruit1);
$fruit2 = $data[2];
var_dump($fruit2);
?>