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
        class Person{
            public $name;
            public $age;

            public function __construct($name, $age){
                $this->name = $name;
                $this->age = $age;
            }
            public function introduce(){
                echo "My name is {$this->name}. My age is {$this->age}.";
            }
        }

        class Teacher extends Person {

        }

        class Student extends Person {
            public $studentID;
            public $schoolName;


            public function enroll($studentID, $schoolName){
                $this->studentID = $studentID;
                $this->schoolName = $schoolName;
                
            }

        }

        $tantan = new Student("Christan", 23);
        $tantan->introduce();


    ?>

</body>
</html>