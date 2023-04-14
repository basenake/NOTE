<?php
$check=false;

echo $check;
$check=false;

echo $check;

echo '<hr>';
$price=125;
echo $price;
$price++;
echo $price;
$price--;
echo $price;
echo ++$price;

echo "<hr>";
$num1=50;
$num2=40;
echo '$num1='.$num1;
echo '<br>';
echo '$num2='.$num2;
echo '<br>';
echo "+ =>";
echo $num1+$num2;
echo "<br>";
echo "- =>";
echo $num1-$num2;
echo "<br>";
echo "* =>";
echo $num1*$num2;
echo "<br>";
echo "/ =>";
echo $num1/$num2;
echo "<br>";
echo "% =>";
echo $num1%$num2;
echo "<br>";
echo "<hr>";


$name='孫勝皇';
//陣列
['name='>'孫勝皇'];

//這時候 name =key 鍵 後面則為 值
// =>胖箭頭 fate arrow
// ->瘦箭頭  arrow
//&& = and  or 真or假  
//xor 兩者都是 即為錯 兩者皆不是 即為對

$score1=60;
$level=($score1>=60)?'及格':'不及格';

echo $level;
//if ($score>=60){$level='及格';}else{$level='不及格';}
echo "<hr>";
//hw
$a=10;
$b=50;
echo '$a= '.$a;
echo "<br>";
echo '$b= '.$b;
echo "<br>";
echo '交換後:<br>';

$temp=$a;
$a=$b;
$b=$temp;

echo '$a='.$a;
echo "<br>";
echo '$b='.$b;

echo "<br>";
echo "<hr>";

//test1
$a=10;
$b=50;
echo '$a+= '.$a;
echo "<br>";
echo '$b= '.$b;
echo "<br>";
echo '交換後:<br>';

$a +=$b;
$b=$a-$b;
$a -=$b;

echo '$a=' .$a;
echo "<br>";
echo '$b=' .$b;
echo "<br>";
echo "<hr>";

//test2
$a=10;
$b=50;
echo '$a= '.$a;
echo "<br>";
echo '$b= '.$b;
echo "<br>";
echo '交換後:<br>';
 
$a = '[a,b]';
$b = 'a[0]';
$a = 'a[1]';

 
echo '$a=' .$a;
echo "<br>";
echo '$b=' .$b;
echo "<br>";


?>