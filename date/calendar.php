<style>

    table{border-collapse: collapse;}
    td{border: 3px solid black;}
</style>



<?php
date_default_timezone_set("Asia/Taipei") ;
$today=strtotime("now");
$month=date("n");
$days=date("t");
$firstdate=date("y-n-1");
$finaldate=date("y-m-t");
$firstdateweek=date("w",strtotime($firstdate));
$weeks=ceil(($days+$firstdateweek)/7);

echo "月份:" .$month;
echo "<br>";
echo "天數:" .$days;
echo "<br>";
echo "第一天:" .$firstdate;
echo "<br>";
echo "最後一天:" .$finaldate;
echo "<br>";
echo "最後一天:" .$firstdateweek;
echo "<br>";
echo "週數:" .$weeks;
echo "<br>";

echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";

for($i<0;$i<$weeks;$i++){
    //週
    echo "<tr>";

    for($j<0;$j<$weeks;$j++){
        //日
        echo "<td>";

        echo "<td>";

    }
    echo "</tr>";

}

echo "</table>";


?>
