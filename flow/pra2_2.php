<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px solid black;
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

   ?>
    </table>
</body>
</html>