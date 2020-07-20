$string = '<a href="https://book.mynavi.jp/">マイナスビックス</a>';
$result = htmlspecialchars($string, ENT_QUOTES);
print $result;