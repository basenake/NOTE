

已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)<br>

天干：甲乙丙丁戊己庚辛壬癸<br>
地支：子丑寅卯辰巳午未申酉戌亥<br>
天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….<br>

<?php
$sky=["甲","乙","丙","丁","戊","己","庚","辛","壬","癸"];
$land=["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];
// 餘數% 

$skyland=[];
for($i=0; $i<60;$i++){ 
    $skyland=$sky[$i%10] . $land[$i%12];
}
// echo "<pre>";
// print_r($skyland);
// echo "</pre>";
echo "<hr>";


$skyland=[];
for($i=0;$i<60;$i++){
    $skyland[]=$sky[$i%10] . $land[$i%12];
}
$year=2053;
$startYear=1024;  //甲子年
echo "給定西元年".$year;
$index=($year-$startYear)%60;
echo "<br>天干地支年為".$skyland[$index];
echo "<hr>";

$a=[];


echo "<h1>反轉陣列 不產生新的</h1>";

echo '給定陣列$a=[2,4,6,1,8]反轉後 $a=[8,1,6,4,2]';
echo "原陣列";
$a=[2,4,6,1,8];
echo "<pre>";
echo "原陣列";
print_r($a);
echo "</pre>";
$times=ceil(count($a)/2);
$maxIndex=count($a)-1;

for ($i=0; $i <$times ; $i++) { 
    $tmp=$a[$i];
    $a[$i]=$a[$maxIndex-$i];
    $a[$maxIndex-$i]=$tmp;
}



echo "<pre>";
echo "反轉陣列";
print_r($a);
echo "</pre>";






































?>