<h1>字串取代</h1>
<?php
$str="aaddw11223";
$replace="*********";
echo $str;
echo "<br>";
echo str_replace($str,$replace,$str);
echo "<br>";
echo str_repeat("*",strlen($str));
echo "<hr>";

?>
<h1>字串分割</h1>
<?php
$str2 ="this,is,a,book ";
$test1=explode(",",$str2);
echo "<pre>";
print_r($test1);
echo "</pre>";
?>
<h1>字串組合</h1>
<?php
$str2 ="this,is,a,book ";
$test1=explode(",",$str2);
echo "<pre>";
print_r($test1);
echo "</pre>";
echo join(".",$test1);
echo "<br>";
echo implode(",",$test1);
echo "<br>";
?>

<h1>字串組合</h1>
<?php
$str3="The reason why a great man is great is that he resolves to be a great man";
echo mb_substr($str3,0,);
echo "<br>";

?>
<h1>字串組合</h1>
<?php
echo "test1";
echo "<br>";

$test2="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$replace="<span style='font-size: larger;color:red'>程式設計</span>";
echo str_replace("程式設計",$replace,$test2);

echo "<br>";
echo "test2";
echo "<br>";

$target2="PHP";
$replace2="<span style='font-size :60PX;color:red'>$target2</span>";
echo str_replace($target2,$replace2,$test2);

echo "<br>";
echo "test3";
echo "<br>";

$target3="網頁";
$replace3="<span style='font-size :60PX;color:red'>$target3</span>";
$split=explode($target3,$test2);
echo "<br>";
echo join ($replace3,$split);


?>