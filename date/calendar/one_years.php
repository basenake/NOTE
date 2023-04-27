<?php
//電腦 不調整時間
$today=strtotime("now");
//這個月
$month=date("n",$today);
//幾天
$days=date("t",$today);
//這個月第一天
$firstDate=date("Y-n-1",$today);
//這個月最後一天
$finalDate=date("Y-n-t",$today);
//第一天星期幾
$firstDateWeek=date("w",strtotime($firstDate));
//最後一天星期幾
$finalDateWeek=date("w",strtotime($finalDate));
//這個月有幾個禮拜
$weeks=ceil(($days+$firstDateWeek)/7);
//除了第一個禮拜 還剩下幾個禮拜
$firstWeekSpace=$firstDateWeek-1;
//上個月月曆上顯示的最後一天
$lastday=date("d",strtotime("-1 month -1 day",$today));
// 上個月最後一天
$lastmonthday=date("t",strtotime("-1 month",$today));
//下個月第一天
$nextdate=date("j",strtotime("+4 day",$today));
// 上個月剩下幾天
$lastmonthdays=$lastmonthday-$lastday;


echo "<hr>";
echo $lastday;
echo "<hr>";
echo $nextdate;
echo "<hr>";
echo $lastmonthdays;
echo "<hr>";



$days=0;
$week=0;
$cell=0;

// echo "<table>";
// for($i=0;$i<42;$i++){
//     echo "<tr>";
//     for($j=0;$j<7;$j++){
//         for ($k=0;$k<6;$k++){
//             if($day){
//                 echo $lastdate++; 
//             // }else if(){
//             // }else(){
//             }
//         }
//     }
//     echo "<tr>";
// }
// echo "<table>";









?>