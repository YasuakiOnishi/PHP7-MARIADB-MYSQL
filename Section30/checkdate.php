<?php
$month = 2;
$day = 31;
$year = 2017;

if(!checkdate($month, $day, $year))
{
    print "正しく日付を入力してください。";
}
?>