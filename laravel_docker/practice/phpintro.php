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
        // PHP introduction
        // echo '<h1>Hello World!</h1>'; 

        // $studentName = 'Taka';

        // echo "hello, $studentName <br />";
        // echo "My favorite color is, $Color";


        // $Color = 'blue';

        // echo '<h3>Personal Detail</h3>'; 
        // $Name = 'Taka';
        // $Age = 24;
        // $hobby = 'soccer';
        // echo "Name: $Name <br />";
        // echo "Age: $Age <br />";
        // echo "Hobby: $hobby <br />";

        // echo "In 2030, My age will be ", 9+$Age,".<br />";
        // echo "My hobby is ", $hobby,"..<br />";

        // echo 'My favourite color is <span style = color:'.$Color.';>'.$Color.'</span>.<br />'
    
    
        // $point = 99;
        // $input2 = 5;

        // if (0 <= $point && $point < 59 ){
        //     echo "FUILURE";
        // } elseif (60 <= $point && $point < 69) {
        //     echo "GOOD";
        // } elseif (70 <= $point && $point < 79) {
        //     echo "VERY GOOD";
        // }else{
        //     echo "EXCELLENT";

        // }
        $food = "nori";
        switch ($food){
            case "sushi":
                echo "Healthy and Good";
                break;
            case "french fries":
                echo "Oily but Yammy!";
                break;
            case "salad":
                echo "No comment :D";
                break;
            case "nori":
                echo"Is it food?";
                break;
            default:
                echo "Your food is $food!";
            }
            


        ?>
    
</body>
</html>
