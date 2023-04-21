
<h1>找出五百年內的閏年
請依照閏年公式找出五百年內的閏年
使用陣列來儲存閏年
使用迴圈來印出閏年</h1>
<?php

echo "2023~2553";
$year=[];
for ($year=2023;$year<2523;$year++){
    if(($year%4==0)&& ($year%100!=0) ||($year%400==0)){
    echo $years[]=$year ;
    echo "<br>";
}
}

foreach ($years as $year){
    echo $year . "<br>";
}
$t=2352;
if (in_array($t,$years)){
    echo $t. "是閏年";
}else{
    echo $t."是平年";
}
echo "<br>";
if (array_search($t,$years)!=false){
    echo $t. "是閏年";
}else{
    echo $t."是平年";
}

// if (isset($years[$t]))












?>