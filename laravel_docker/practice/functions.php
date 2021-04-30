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
    function familiyname($firstname){
        echo "$firstname Dupay.<br>";
    }
    familiyname("Ryan");

    function add($x, $y){

        return $x + $y;
    }
    echo add(100,11);

    $x = 10;

    function myCheck(){
        echo "Variable x inside function is : $x";
        global $x;
        echo "Variable x inside function is : $x";
    }
    myCheck();

    echo "Variable x outside function is: $x";

    ?>
</body>
</html>