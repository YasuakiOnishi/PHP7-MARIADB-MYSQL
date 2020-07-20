<?php
$menber = ["name" => "○田○夫",
"age" => 20,
"tall" => 170];

foreach($menber as $key => $value)
{
    if($key == "name")
    {
        $title = "名前";
    }elseif($key == "age"){
        $title = "年齢";
    }elseif($key == "tall"){
        $title = "身長";
    }
    print "$title : $value";
    print "<br>";
}
?>