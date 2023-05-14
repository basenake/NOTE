<style>
    *{
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<h1>巢狀星星</h1>
<h1>直角三角形</h1>
<?php

for ($i=0;$i<5;$i++){
    for ( $j=0;$j<($i+1);$j++)
    echo "*";
    echo "<br>";
}
?>
<h1>倒三角形</h1>
<?php
for ($i=0;$i<5;$i++){
    for ($j=0;$j<(5-$i);$j++){
    echo "*";
    }
    echo "<br>";
}

?>
<h1>正三角形</h1>
<?php

for ($i=0;$i<5;$i++){
    for ( $j=0;$j<(4-$i);$j++){
        echo "&nbsp;";
    }
    for ( $k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
?>
<h1>菱形-兩個巢狀迴圈</h1>
<?php

for ($i=0;$i<5;$i++){
    for ( $j=0;$j<(4-$i);$j++){
        echo "&nbsp;";
    }
    for ( $k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
for ($i=0;$i<4;$i++){
    for ( $j=0;$j<$i+1;$j++){
        echo "&nbsp;";
    }
    for ($k=0;$k<((3-$i)*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
?>
<h1>菱形-1個巢狀迴圈</h1>
<?php
$temp=0;
for($i=0;$i<9;$i++){

    /* if($i<5){
        $tmp=$i;
    }else{
        $tmp=8-$i;
    } */
    
    $tmp=($i<5)?$i:8-$i;

    for($j=0;$j<(4-$tmp);$j++){
        echo "&nbsp;";
    }

    for($k=0;$k<($tmp*2+1);$k++){
        echo "1";
    }
    echo "<br>";  
}

?>
<h1>矩形</h1>
<?php
$n=7;
for ($i=0; $i<$n;$i++) { 

    for ($j=0; $j <$n ; $j++){
        if($i==0 || $i==$n-1){
            echo "*";
        }else if ($j==0 || $j==$n-1){
            echo "*";
        }else{
            echo "0";
        }
    }
    echo "<br>";
}
?>
<h1>矩形對角線</h1>
<h2>i 上面j 左邊</h2>
<?php
$n=9;
for ($i=0; $i<$n;$i++) { 

    for($j=0;$j<$n;$j++){
        if($i==0 || $i==($n-1)){
            echo "*";
        }else if($j==0 || $j==$n-1 || $i==$j || $i==$n-1-$j){  
            echo "0";
        // }else if ($j==0 || $j==$n-1){
        //     echo "*";
        // }else if ($j==$i || $j==$n-1){
        //     echo "1";
        // }else if ($i==$j || $j==$n-1-$i){
        //     echo "2";
        }else { 
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>
<h1>空菱形</h1>
<?php
$temp=0;
for($i=0;$i<9;$i++){

    /* if($i<5){
        $tmp=$i;
    }else{
        $tmp=8-$i;
    } */
    
    $tmp=($i<5)?$i:8-$i;

    for($j=0;$j<(4-$tmp);$j++){
        echo "&nbsp;";
    }

    for($k=0;$k<($tmp*2+1);$k++){
        echo "*";
    }
    echo "<br>";  
}
?>
<h3>空心菱形</h3>
<?php
$n=9;

$n=($n%2==0)?$n+1:$n;

$tmp=0;

for($i=0;$i<$n;$i++){

    $tmp=($i<ceil($n/2))?$i:$n-1-$i;

    for($j=0;$j<(ceil($n/2)-1-$tmp);$j++){
        echo "&nbsp;";
    }

    for($k=0;$k<($tmp*2+1);$k++){
        /**
         * 空心菱形的狀況
         * 只畫$k的開始第1顆及$k的最後一顆
         * 第1顆為$k==0
         * 最後一顆為需要的總星星數$tmp*2+1
         * 因為迴圈是由0開始，所以轉成位置時為$tmp*2+1-1;
         * 因此，最後一顆的位置會是在$k=$tmp*2時
         */        
        if($k==0 || $k==$tmp*2){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";  
}

?>

<h3>十字空心菱形</h3>
<?php
$n=9;

$n=($n%2==0)?$n+1:$n;

$tmp=0;
for($i=0;$i<$n;$i++){

    $tmp=($i<ceil($n/2))?$i:$n-1-$i;

    for($j=0;$j<(ceil($n/2)-1-$tmp);$j++){
        echo "&nbsp;";
    }

    /**
     * 空心菱形中畫十字線的狀況
     * 1. 當橫向執行到中心點時，需要畫星星
     *    而中心點的位置是由繪製空白的$j及繪製星星$k加總來決定的
     *    因此$j+$k=中心點($n-1)/2 因為$n為奇數所以減1後除以2就是中心點
     * 2. 當直向執行到中心點時，需要畫星星
     *    直向的中心點為($n-1)/2
     *    因此當$i為($n-1)/2時需要畫星星
     */
    for($k=0;$k<($tmp*2+1);$k++){
        if($k==0 || $k==$tmp*2 || $k+$j==($n-1)/2 || $i==($n-1)/2){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";  
}







?>