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