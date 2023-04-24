<h1>給定兩個日期，計算中間間隔天數</h1>
<div>2023-04-24</div>
<div>2023-10-20</div>
<?php
date_default_timezone_set("Asia/Taipei") ;
echo strtotime("now");
$today=strtotime("2023-04-24");
$brithday=strtotime("2023-10-20");
$gap=($brithday-$today)/(24*60*60);
echo "<br>";
echo  "距離" . date("Y-m-d",$brithday) . "還有" .$gap ."天";
echo "<br>";
echo "距離明天生日";
$nextbrithday=strtotime("2024-10-20");
$gap2=($nextbrithday-$today)/(24*60*60);
echo  "距離" . date("Y-m-d",$nextbrithday) . "還有" .$gap2 ."天";







?>