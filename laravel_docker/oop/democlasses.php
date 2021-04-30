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

    class School{
        public $name;
        public $type;
        public $president;

        public function setName($new_name){
            $this->name = $new_name;
        }

        public function getName(){
            echo $this->name;
        }
    }
    $tantan_school = new School();
    $tantan_school->setName("UNO-R");

    $marina_school = new School();
    $marina_school->setName("UNO-O");

    $yakumi_school = new School();
    $yakumi_school->setName("Gokusen");

    $yakumi_school->getName();
    ?>

    
</body>
</html>