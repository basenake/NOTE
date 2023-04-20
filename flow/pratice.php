<h1>論年判斷</h1>
<ul>
    <li>公元年份除以4不可整除，為平年。</li>
    <li>公元年份除以4可整除但除以100不可整除，為閏年。</li>
    <li>公元年份除以100可整除但除以400不可整除，為平年。</li>
</ul>
<p>轉換描述為:</p>
<ul>
    <li>公元年份除以4可整除，為閏年。</li>
    <li>公元年份除以4可整除但除以100不可整除，為閏年。
        <div>
            %4 == 0 為閏年
        </div>
        <div>
            %100  ==0 為閏年
        </div>
        <div>兩種條件加入 &&=and</div>
    </li>
    <li>公元年份除以400可整除但除以100不可整除，為閏年。
        <div>
            1.公元年份除以100可以整除=>平年
        </div>
        <div>
            2.公元年份除以400可以整除=>閏年
        </div>
        <div>
            3.公元年分除以4可以整除=>閏年
        </div>
        <div>
            4.以上 and or
        </div>
    </li>
</ul>

<?php


$year=2025;
if($year %4 ==0){
    echo $year."是閏年";
}else{
    echo $year."不是閏年";
}
echo "<br>";
$year=2000;
if($year %4 == 0){
    echo $year."是閏年";
    }else{
    echo $year."不是閏年";
}
echo "<br>";
//以下 && () 可加可不加 ||為or
//$year=2000;
//if($year %4 == 0 && $yeae %100 ==0){
//  echo $year."是閏年";
//  }else{
//    echo $year."不是閏年";}
// 等於 ==  嚴謹等於=== 不等於!= 完全不等於 !==
$year1=2100;
if(($year1 %4 == 0 )&&($year1 % 100 !=0)){
    echo $year1."是閏年";
    }else{
    echo $year1."不是閏年";
}
echo "<br>";
$year2=2400;
//條件愈 嚴苛的 放後面
if(($year2 %400 == 0 ) ||($year2 % 100 !=0) && ($year2 %4 ==0)){
    echo $year2."是閏年";
    }else{
    echo $year2."不是閏年";
}
echo "<br>";
//巢狀 方式 













// for($a=0 ; $a<5; $a**){
//     for($b=0 ; $b<$a; $b++){
//         echo '*';
//         echo "<br>";
//     }
// }
echo "<hr>";

$n=10;
for($c=0 ; $c<=$n;$c++){
    for ($i=0; $i<=$c; $i++) { 
    echo "*";
    }
    echo "<br>";
};
echo "<hr>";
// for ($a=1;$a<20 ; $a=$a--) { 
//     echo "*";
//     echo "<br>";
//     for()
//     echo "*";  

// }



 ?>