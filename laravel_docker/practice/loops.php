<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 1;
    while($x <= 7){
        echo " the number is: $x<br>";
        $x++;
    }

    $colors = array("red", "green", "blue", "yellow");

    foreach($colors as $value){
        echo "$value <br>";
    }


    ?>
    <?php

    for($num=1; $num<=10; $num++){
        echo $num;
        if ($num != 10){
            echo "-";
        }
    }
    echo "<br>";
    $num = 1;
    while($num <= 10){
        echo $num;
        if ($num != 10){
            echo "-";
        }
        $num++;
    }

    echo "<br>";
    for ($i=1; $i <= 10; $i++) { 
        echo $i == 10 ? "$i" : "$i-";
        
    }

    ?>
    <body>
    <table border=1>
        <thead>
        <tr>
        <th bgcolor="#6699CC">Number</th>
        <th bgcolor="#6699CC">Description</th>
        </tr>
        </thead>
        <?php
            for ($x = 1; $x <= 4; $x++) {
                echo "<tr>
                        <td>$x</td>
                        <td>This is Data $x</td>
                    </tr>";
            }
        ?>
    </table>
    <table border=1>
            <tr>
                <th>Number</th>
                <th>Description</th>
            </tr>
            <?php for($i = 1; $i <= 4; $i++): ?>
                <tr>
                    <td> <?php echo $i; ?> </td>
                    <td> This is Data <?php echo $i; ?> </td>
                </tr>
            <?php endfor; ?>
    </table>

    <?php
    $x = 1;
    while($x <= 5){
        for ($i =1; $i <= $x; $i++){
        echo "*";
        }
        echo "<br>";
        $x++;
    }
    $y = 5;
    while($y >= 1){
        for ($i =1; $i <= $y; $i++){
        echo "*";
        }
        echo "<br>";
        $y--;
    }
    echo "<br>";

    for($t=1; $t <= 10; $t++){
        if($t <= 5){
            for ($i =1; $i <= $t; $i++){
            echo "*";
            }
            echo "<br>";
        }else{
            for ($i = 11-$t; $i >= 1; $i--){
            echo "*";
            }
            echo "<br>";
        }
    }

    $str = '*';
    for($t=1; $t <= 9; $t++){
        if($t <=4){
        echo $str;
        $str .= "*";
        echo "<br>";
        }else{
        echo $str;
        $str = substr($str,1);
        echo "<br>";
        }


    }


    ?>

</body>
</html>