<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse; /* 設定 table 的線為單線 */
            width: 85%; /* 設定 table 的寬度為 85% */
            box-shadow: 2px 2px 2px gray; /* 設定 table 的陰影 */
        }
        td {
            border: 1px solid lightgray; /* 設定 td 的線為淺灰色 */
            padding: 5px; /* 設定 td 內容的 padding 為 5px */
            text-align: center;
        }
        td:nth-child(1),
        tr:nth-child(1){
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <table>
    <?php
for($a=0; $a<10;$a++){
    echo "<td>";
    echo  $a;
    echo "</td>";
    }
for ($j = 1; $j <10; $j++){
    echo "<tr>";
    echo "<td>";
    echo  $j;
    echo "</td>"; 
    for($i = 1; $i <= 9;$i++){
        echo "<td>";
        echo  $j * $i;
        echo "</td>";
        }
echo "</tr>";
}

for ($j = 0; $j <10; $j++){
    echo "<tr>";
    for($i = 0; $i <= 9;$i++){
        echo "<td>";
        if($i==0 && $j==0){
            echo "&nbsp";}
        else if ($i==0) {
            echo $j;
        }else if($j==0){
            echo $i;
        }else {
        echo $j * $i ;
    }
    echo "</td>";
}
echo "</tr>";
}
echo "<hr>";

for ($j = 0; $j <10; $j++){
    echo "<tr>";
    for($i = 0; $i <= 9;$i++){
        for($i = 0; $i <= 9;$i++){
            echo "<td>";
            if($i==0 && $j==0){
                echo "&nbsp";}
            else if ($i==0) {
                echo $j;
            }else if($j==0){
                echo $i;
            }else if($i<=$j){
            echo $j * $i ;
        }
    echo "</td>";
}
echo "</tr>";
}
}
   ?>
    </table>
</body>
</html>