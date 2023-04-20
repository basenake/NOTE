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
        echo "*";
    }
    echo "<br>";  
}
?>