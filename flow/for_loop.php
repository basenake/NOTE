<?php
// for loop
for($a=1 ; $a<10; $a++){
    echo $a*10;
    echo ",";
}
//做1~10 *10 的while
$a=0;
while ($a < 10) {
    echo $a*10;
    echo "<br>";
    $a++;
}
echo '$a'.$a;
echo "<hr>";
do{
    echo $a*10;
    echo "<br>";
    $a++;
}while($a<10);
 echo '$a'.$a;
 echo "<hr>";

//改成while
$n=97;
for($i=3;$i<=97;$i++){
    $check=false;
    for($j=2;$j<$i;$j++){
    
        if($i%$j==0){
            $check=true;
            break;
        }
    }
    
    if($check==false){
        echo $i . ",";
    }
}
echo "<hr>";
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
    echo "{$x}x{$y}=" .($x)*($y)  ;
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



//
 ?>