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














?>