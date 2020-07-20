<?php
$data = ["A", "B", "C", "D", "E"];
print implode(',', $data) . '<br>';
$result = array_slice($data, 0, 4);//ABCDを取り出す
print implode(',', $result) . '<br>';
$result = array_slice($data, -3, 1);//Cを取り出す
print_implode(',',$result) . '<br>';
$result = array_slice($data, 3, -1);//Dを取り出す
print_implode(',',$result) . '<br>';
$result = array_slice($data, 2) . '<br>';//CDEを取り出す
print_implode(',',$result) . '<br>';