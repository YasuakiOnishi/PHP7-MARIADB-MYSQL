<?php
$sales = ["TV2" => "1000", "TV1" => "500", "RADIO1" => "800"];
$add_data = ["TV1" => "2000", "RADIO2" => "600"];
$result = array_merge($data, $add_data);
print "<pre>";
print_r($sales);
print "</pre>";