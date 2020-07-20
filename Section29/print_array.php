<?php
$name = "永田順伸";
print "あなたの名前は$name　です。<br>";
print "あなたの名前は$nameです。<br>";
print "あなたの名前は($name)です。<br>";
print 'あなたの名前は$nameです。<br>';

$data['$name'] = "永田順伸";
print "あなたの名前は{$data['name']}です。";