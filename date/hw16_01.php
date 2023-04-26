<style>
    table{
        border-collapse: collapse;
    }
    table,td{
        border: 1px solid black;
        padding: 10px 15px;
    }
</style>
<?php
$today=strtotime("now");
$month=date("n",$today);
$days=date("t",$today);
$frd=date("Y-n-1",$today);
//firstday  第一天
$fnd=date("Y-n-t",$today);
//fianlday 最後一天
$frdw=date("w",strtotime($frd));
//firstdayweek 第一周
$fndw=date("w",strtotime($fnd));
//fianldayweek 最後一周
$weeks=ceil(($days+$frdw)/7);
$frws=$frdw-1;
//fristweekspace
echo $month;
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
    echo "<tr>";
    for($j=0;$j<7;$j++){
        echo "<td>";
        if($i==0 and $j<$frdw or $i==0 and $j==$frd || $i==$weeks-1 and $j>$fndw  or $i==$weeks-1 and $j>$fndw){
            echo "&nbsp;";
        }else{
            echo $j+7*$i-$frws;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";



























?>