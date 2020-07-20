<?php
$menber[0] = "○田○夫";
$menber[1] = "○山□夫";
$menber[2] = "○川△夫";
$menber[3] = "○木×夫";
$menber[4] = "○村▽夫";

$i = 1;
$limit = 3;

foreach($menber as $key => $value)
{
    if($i > $limit)
    {
        print "ループを抜けます。<br>";
    break;
    }
    print "名前 : $value";
    print "<br>";
    $i++;
}
?>