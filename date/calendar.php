<style>

    table{border-collapse: collapse;}
    td{border: 3px solid black;}
</style>



<?php
date_default_timezone_set("Asia/Taipei") ;
$today=strtotime("now");
$month=date("n",$today);
$days=date("t",$today);
$firstdate=date("y-n-1",$today);
$finaldate=date("y-n-t",$today);
$firstdateweek=date("w",strtotime($firstdate));
$finaldateweek=date("w",strtotime($finaldate));
$weeks=ceil(($days+$firstdateweek)/7);
$firstweekwpace=$firstdateweek-1;
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
echo "最後一天星期:" .$finaldateweek;
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

for($i=0;$i<$weeks;$i++){
    //週
    echo "<tr>";
    for($j=0;$j<7;$j++){
        //日
        echo "<td>";
        if($i==0){
            if($j<$firstdateweek){
                echo "&nbsp;";
            }else{
                echo $j+7*$i-($firstdateweek-1);
            }
        }else if($i==$week-1){
            if ($j>$finaldateweek){
                echo "&nbsp;";
            }else{
                echo $j+7*$i-($firstdateweek-1);
            }
           
        }else{
            echo $j+7*$i-($firstdateweek-1);
        }
        echo "</td>";
    }
    echo "</tr>";

}

echo "</table>";


?>
