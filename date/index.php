<h2>時間與日期</h2>
<?php
//單人使用 可以
//php 本身設定為 歐洲柏林時間 需去修xampp config
// 點進 php.ini 後 尋找 date. timezone 並修改時區位置
//date_default_timezone_set 使用者時區
date_default_timezone_set("Asia/Taipei") ;
echo date("Y-m-d H:i:s");
echo "<br>";
echo strtotime("now");
echo "<br>";
$yesterday=strtotime("now")-(60*60*24);
echo date("Y-m-d H:i:s",$yesterday);

echo "<br>";
$today=strtotime("now");
echo $today;
echo "<br>";

echo "現在時間是:".$today."秒";
echo "<br>";
echo date ("Y-m-d H:i:s",$today);
echo "<br>";
echo "人類可讀性日期字串:".date("Y-m-d H:i:s");
echo "<br>";
$tomorrow=strtotime("+1 day",$today);
echo "明天:".date ("Y-m-d H:i:s",$tomorrow);
$yesterday=strtotime("-1 day",$today);
echo "<br>";
echo "昨天:".date ("Y-m-d H:i:s",$yesterday);
echo "<br>";
$nextweek=strtotime("+1week",$today);
echo "下周:".date ("Y-m-d H:i:s",$nextweek);
$lastweek=strtotime("-1week",$today);
echo "<br>";
echo "上周:".date ("Y-m-d H:i:s",$lastweek);
echo "<br>";
echo strtotime("2023-07-01");








?>