<?php

//if(條件式){真的結果}else{//假的結果 else 不一定要寫}

$score=70;
if ($score>60){
    echo "成績=".$score;
    echo "<br>";
    echo "恭喜及格了~";}
else{
    echo "成績=".$score;
    echo "<br>";
    echo "請繼續努力";
}
echo "<br>";

$score=50;
if ($score>60){
    echo "成績=".$score;
    echo "<br>";
    echo "恭喜及格了~";}
else{
    echo "成績=".$score;
    echo "<br>";
    echo "請繼續努力";
}
echo "<br>";
$level="A";
switch($level){
    case "A":
        echo "表現優良請繼續保持";
    break;
    case "B":
        echo "值得肯定請繼續進步";
    break;
    case "C":
        echo "需要加強";
    break;
    case "D":
        echo "需要多練習加油";
    break;
    default: 
        echo "是否放棄努力?";
}
//test
$goodluck="A";
switch($goodluck){
    case "A":
        echo "天使眷顧著你~凡人!";
    break;
    case "B":
        echo "運氣很好的凡人~";
    break;
    case "C":
        echo "凡人的運氣...";
    break;
    case "D":
        echo "運氣不好的凡人......";
    break;
    case "E":
        echo "可憐的凡人!!!!";
    break;
    default: 
        echo "地獄倒楣鬼,是否運氣太差了?";
}
echo "<hr>";
//巢狀結構 多重判斷 如果第一項符合則不跑後面判斷 寫死判定 則可以規避
$cook="85";
echo "您的成績為:" .$cook;
echo "<br>";
if($cook>= 90){
    $cook="A";
}else if($cook>=80){
    $cook="B";
}else if($cook>=70){
    $cook="C";
}else if($cook>=60){
    $cook="D";
}else if($cook>=50){
    $cook="E";
}
echo "成績等級為:" .$cook;
echo "<br>";
echo "成績評語:" ;















?>