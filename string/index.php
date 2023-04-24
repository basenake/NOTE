<?php
// 一個中文字 位元= 1+2=>3 所以 6個字=3*6=18
//第三個str 是因為英文+中文=>12*3+空格*3+英文*16=60
$str ="今天天氣真爛";
$str2 ="today is bad day";
$str3 ="魔物獵人崛起monster hunter rise 刷起來真累人";
echo $str;
echo "<br>";
echo $str2;
echo "<br>";
echo $str3;
echo "<br>";
echo substr($str,0,18);
echo "<br>";
echo substr($str2,0,18);
echo "<br>";
echo substr($str3,0,60);
echo "<hr>";
echo "<h3>mb_substr()</h3>";
echo mb_substr($str,0,2);
echo "<br>";
echo mb_substr($str2,0,1);
echo "<br>";
echo mb_substr($str3,0,3);
echo "<br>";
echo mb_substr($str3,0,3);
echo "<br>";
echo "<h3>中英混和取字字串</h3>";
echo mb_substr( $str3,0,16);
echo "<br>";




?>

