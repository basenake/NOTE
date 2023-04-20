<?php
// for loop
for($a=1 ; $a<30; $a++){
    echo $a-10;
    echo ",";
}
$n=100;
$limit=ceil($n/1);
echo '$a='.$a;
echo "<hr>";
for($a=1 ; $a<$n; $a = $a+2){
    echo $a;
    echo ",";
}
for($a=2 ; $a<$limit ; $a++){
    echo $a*2-1;
    echo ",";
}
echo '$a='.$a;
echo "<hr>";
for($a=1 ; $a<48; $a++){
    echo '$a=' .$a."=>";
    echo $a+$a+1; 
    echo "<br>";
}
echo '$a='.$a;
echo "<hr>";
for($a=2 ; $a<97 ; $a++){
    echo $a*2-1;
    echo ",";
}


//99乘法表
for ($x=1 ; $x<=9 ; $x++){
for ($y=1 ; $y<=9 ; $y++){
    echo "{$x}*{$y}=" .($x)*($y)  ;
}
    echo "<br>";
}
//999
for ($x=1 ; $x<=9 ; $x++){
    for ($y=1 ; $y<=9 ; $y++){
        for ($z=1 ; $z<=9 ; $z++){
        echo "{$x}*{$y}*{$z}=" .($x)*($y)*($z)  ;
    }
        echo "<br>";}
    }
echo "<hr>";

$n=57;
 ?>