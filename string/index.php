<?php
// 一個中文字 位元= 1+2=>3 所以 6個字=3*6=18
//第三個str 是因為英文+中文=>12*3+空格*3+英文*16=60
$str="今天天氣真爛";
$str2="today is bad day";
$str3="魔物獵人崛起monster hunter rise 刷起來真累人";
echo "<h3>substr()</h3>";
echo "<br>";
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
echo "<hr>";
echo "<h3>中英混和取字字串</h3>";
echo mb_substr($str3,0,16);
echo "<br>";
echo "<hr>";
echo "<h3>取消前後空白 字串清洗 trim</h3>";
$str4="    今天 天氣 很爛    ";
$str5="  今天 天氣 很爛    ";
echo $str4;
echo "<br>";
echo $str5;
echo "<br>";
echo trim($str4);
echo "<br>";
echo trim($str5);
echo "<br>";
echo "<hr>";
echo "<h3>重複特定字元 str_repeat</h3>";
$str6="suck";
echo str_repeat($str6,10);
echo "<br>";
echo "<hr>";
echo "<h3>取代字元 str_replace</h3>";
$str="今天天氣真爛";
$replace="很好";
echo str_replace("真爛",$replace,$str);
echo "<br>";
//echo str_replace("很好",$replace,str_replace("天","日",$str));
echo str_replace(["天","真爛"],["日",$replace],$str);
echo "<br>";
echo "<hr>";
echo "<h3>字元切成陣列explode imploder join</h3>";
$str="在此範例中有個字串叫做「這是wibibi測試字串」，我們故意參雜了中文字與英文字，接著輸出 mb_substr 截取的字串，從第 0 個字擷取到第 8 個字，編碼採用 UTF-8 編碼，這樣跑出來的結果就是「這是wibibi」這 8 個字囉！
";
echo "<br>";
$ex=explode("，",$str);
echo "<pre>";
print_r($ex);
echo "</pre>";
$file="list.doc";
$sub=explode(".",$file);
echo "<pre>";
print_r($sub);
echo "</pre>";
echo "<hr>";
echo "<h3>implode  join 取代 並換成 想要的字元 ，換成 , .</h3>";
echo "<br>";
echo implode(",",$ex);
echo "<br>";
echo join(".",$ex);








?>

