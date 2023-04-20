<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{border: 1px solid black;}
    </style>
</head>
<body>
    <table>
    <?php
echo '<hr>';
for ($a=1;$a<=9;$a++){
    echo "1 x $a = ";
    echo  1 * $a ;
    echo "<br>";
}
// for ( $a = 1 ; $a <= 9 ; $a++ ){

//     for($b=1;$b<=9;$b){
//         echo " $a x $b = " ;
//         echo $a * $b;
//     }
//     echo "<br>";
// }


for ($j = 1; $j <=9; $j++){
    echo "<tr>";

    for($i = 1; $i <= 9;$i++){
        echo "<td>";
        echo " $j x $i =";
        echo $j * $i;
        echo "</td>";
    }
    echo "<tr>";
}


    ?>
    </table>
</body>
</html>