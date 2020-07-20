<?php
$data1 = ["name" => "○田○夫","age" => 20];
$data2 = ["name" => "○木○郎","tall" => 180,"age" => 30];

$data = $data1 + $data2;

print "<pre>";
var_dump($data);
print "</pre>";
?>