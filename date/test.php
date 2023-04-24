<h1>給定兩個日期，計算中間間隔天數</h1>
<div>2023-04-24</div>
<div>2023-10-20</div>
<?php
date_default_timezone_set("Asia/Taipei") ;
echo strtotime("now");
$today=strtotime("2023-04-24");
$today=strtotime(date("Y-m-d"));
$brithday=strtotime("2023-10-20");
$gap=($brithday-$today)/(24*60*60);
echo "<br>";
echo  "距離" . date("Y-m-d",$brithday) . "還有" .$gap ."天";
echo "<br>";
echo "距離明年生日";
$nextbrithday=strtotime("2024-10-20");
$gap2=($nextbrithday-$today)/(24*60*60);
echo  "距離" . date("Y-m-d",$nextbrithday) . "還有" .$gap2 ."天";
echo "<br>";
$brithday2=strtotime("2023-10-07");
echo "<hr>";
?>
<?php
$today=strtotime('now');
echo date("Y/m/d");
echo "<br>";
echo date("m.d.Y");
echo "<br>";
echo date("m.d.Y.D");
echo "<br>";
echo date("m.d.Y.l");
echo "<br>";
echo date("Y-m-d H:i:s");
echo "<br>";
echo date("Y-n-d g:i:s");
echo "<br>";
echo date("Y-m-d G:") .(int)date("i").":".(int)date("s");
echo "<br>";
echo date("Y-m-d-H");
echo "<br>";
echo "今天是西元" .date("Y年n月j日");
echo "<br>";
echo date("N")>=6?"假日":"工作日";
?>