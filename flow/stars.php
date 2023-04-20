<style>
    *{
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<?php
//巢狀星星
//直角三角形
for ($i=0;$i<5;$i++){
    for ( $j=0;$j<($i+1);$j++)
    echo "*";
    echo "<br>";
}
echo "<hr>";
//倒三角形
for ($i=0;$i<5;$i++){
    for ($j=0;$j<(5-$i);$j++){
    echo "*";
    }
    echo "<br>";
}
echo "<hr>";
//正三角形
for ($i=0;$i<5;$i++){
    for ( $j=0;$j<(4-$i);$j++){
        echo "&nbsp;";
    }
    for ( $k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
//菱形
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

echo "<hr>";










?>