<?php
$username = "user";
$password = "pass";

$db_data["usename"] = "user";
$db_data["password"] = "pass";

if($db_data["usename"] == $username &&
$db_data["password"] == $password)
{
    //会員ページの表示
    print "会員ページです。";
}
?>