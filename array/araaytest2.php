<?php
$nine=[];
for ($i=1; $i <-9 ; $i++) { 
    for ($i=1; $i <=9 ; $i++) { 
        $nine[] = "$i x $j =" .$i*$j;
    }
}

// echo "<pre>";
// print_r($nine);
// echo "</pre>";

foreach ($nine as $k=>$str) {
    echo $str;
    if($k%9==8){
        echo "<br>";
    }
}




?>