<style>
.area-1,
.area-2{
    display: inline-block;
    width: 35px;
    height: 35px;
    border: 1px solid #ccc;
    text-align: center;
    line-height:33px;
    border-radius: 50%;
    margin: 0.5rem;
}
.area-1{
    background-color: orangered;
}   
.area-2{
    background-color: blue;

}

</style>


<?php

$nine=[];
for($i=1; $i <=9 ; $i++) { 
    for ($j=1; $j <=9 ; $j  ++) { 
        $nine[] = "$i x $j =" .$i*$j;
    }
}
// echo "<pre>";
// print_r($nine);
// echo "</pre>";
foreach($nine as $k => $str) {
    echo $str;
    if($k%9==8){
        echo "<br>";
    }
}
echo "<hr>";
echo "<h1>威力彩選號</h1>";

// echo rand(1,38);
//計算陣列 個數多少

$lotto=[];

$a=0;
while(count($lotto)<6){
    $tmp=rand(1,38);

    // echo "亂數產生的數字:" .$tmp;
    if(!in_array($tmp,$lotto)){
        $lotto[]=$tmp;
        // echo "有發生重複的數字" .$tmp;
    // }else{
    //     // echo "沒有發生重複的數字,所以寫入陣列" .$tmp;
     }
    // echo "<pre>";
    // print_r($lotto);
    // echo "</pre>";
}
foreach ($lotto as $num){
    echo "<span class='area-1'>" . $num . '</span>';
}
echo "<br>";
echo "<span class='area-2'>" . $num . '</span>';




?>