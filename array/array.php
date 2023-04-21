<?php
//參考c語言陣列
// a b c 字元 abagej 字串
//陣列key 值不可重複  value 值 可以一樣
$a[1]="A";
$a[2]="B";
$a['name']="wayne";
$a[4]="D";
//下列會被轉換為 近數字
$a['001']="A";
$e=["A","B",'C'];
$e[]="D";
$e['total']=5;
$e[]="E";



//有相同key值會被覆蓋
//顯示陣列 可印出 所有東西
echo "<pre>";
print_r($a);
//顯示一模一樣資料
echo "</pre>";
//增加資料
$b[]="B";
$b[]="C";
$b[]="D";
$b[]="E";
echo "<pre>";
print_r($b);
echo "</pre>";

echo "<pre>";
print_r($e);
echo "</pre>";

echo $a[1];
echo "<br>";
echo $a[2];
echo "<br>";
echo $a['name'];
echo "<br>";
echo $a[4];
echo "<br>";
//c2 未被宣告
//echo $c[2];
echo "<br>";
//test for array
//陣列key   0   1   2   3   4   5   6   7   8   9
      $f=["1","2","3","4","5","6","7","8","9","10"];


echo $f[5];
echo "<br>";
echo $f[8];
echo "<br>";
echo $f[9];
echo "<br>";


//$f 沒有 10
//echo $f[10];

echo'<hr>';

//test
$aa=["b","m","e","g","g","d","a","d","a","d","e","r"];
$aa[]="fu";
$aa[]="ck";
$aa[]="m";

$aa['name01']="monster";
$aa['name02']="hunter";
$aa['name03']="rise";

echo "<pre>";
print_r($aa);
echo "</pre>";
echo $aa[1];
//以下 同時為 01 跟name01
echo $aa['name01'];
?>
<h1>多維陣列</h1>
<?php
$ab=[
     [11,12,31,57,94,64,52],
     [87,98,65,31,87,425,16],
     [312,116,995,71,16,132,98],

];
echo "<pre>";
print_r($ab);
echo "</pre>";

echo "<pre>";
print_r ($ab[2]);
echo "</pre>";
echo "<hr>";
$da="bak";
?>
<h1>判斷陣列</h1>
<?php
if(is_array($aa)){
    echo "是陣列";
}else{
    echo "不是陣列";
}
$check=is_array($aa);
//跟上面用法依樣

echo "<br>";
if(is_array($da)){
    echo "是陣列";
}else{
    echo "不是陣列";
}
echo "<br>";

if(in_array("87", $b)){
    echo "87在陣列";
}else{
    echo "87不在陣列";
}

echo "<hr>";
?>
<h1>陣列排序</h1>
1.sort 排序
2.rsort反排序
<?php
$d=["N","I",30,21,77,3];
$z=["z","c",8,10,57,96,31];

rsort($d);
echo "<pre>";
print_r($d);
echo "</pre>";
echo "<hr>";

sort($d);
echo "<pre>";
print_r($d);
echo "</pre>";

echo "<hr>";
// result=sort($d) 沒用
sort($z);
echo "<pre>";
print_r($z);
echo "</pre>";
echo "<hr>";

rsort($z);
echo "<pre>";
print_r($z);
echo "</pre>";
echo "<hr>";

?>
<h1>填滿陣列</h1>
<?php
$fill=array_fill(0,10,'php');
echo "<pre>";
print_r($fill);
echo "</pre>";
echo "<hr>";
?>
<h1>從陣列尋找值</h1>
<?php
echo array_search("10",$z);
echo "<br>";
echo $z[5];
echo "<hr>";

?>
<h1>陣列key 須尋找</h1>
<?php
$keys=array_keys($z);
echo "<pre>";
print_r($keys);
echo "</pre>";
echo "<br>";

$keys=array_keys($d);
echo "<pre>";
print_r($keys);
echo "</pre>";

echo key($d);
echo "<hr>";
?>
<h1>合併陣列</h1>
<?php
$merge=array_merge($d,$z);
echo "<pre>";
print_r($merge);
echo "</pre>";

?>
<h1>字串化陣列or 序列化</h1>
<?php
$seA=serialize($z);
echo "<pre>";
echo $seA;
echo "</pre>";
?>
<h1>陣列字串化 or 反序列化</h1>
<?php
echo "<hr>";
$ueA=serialize($z);
echo "<pre>";
print_r($ueA);
echo "</pre>";

?>
<h1>以字串 or 符號 把陣列 字串化</h1>
<?php
echo "<hr>";
echo "<pre>";
$n=implode(',',$z);
echo $n;
echo "</pre>";

echo "<hr>";
echo "<pre>";
$array=explode(',',$n);
print_r($array);
echo "</pre>";

?>