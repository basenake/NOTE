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
























?>