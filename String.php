<?php
$str="this is string";
echo $str;
echo "<br> the length of string is: ".strlen($str);
echo "<br> number of words in string: ".str_word_count($str);
echo "<br> reverse of string is: ".strrev($str);
echo"<br> the serach for is in string is: ".strpos($str,"is");
echo "<br> replace string is ".str_replace("is","at",$str);
?>