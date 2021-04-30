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
   class House{
       public $hasRoof = true;
       public $bedrooms = 2;
       public $hasWindow = true;

       public function setRoof(){
       }
   }

//    class School{
//    }


   class Forest{
       public $hasTree = true;
       public $birds = 100;
       public $insects = 1000;

       public function setTree(){
           $hasTree = true;
       }
       public function addBirds(){
           $birds += 1;
       }
       public function addInsects(){
           $insects += 1;
       }
   }

   class Sea{
       public $Whale = 200;
       public $fishes = 3000;
       public $hasSeaweed = false;

       public function __construct(){
           echo "Sea Created!";
       }


       public function addWhale($new_whale){
           $this->whale = $new_whale;
           $Whale += 1;
       }
       public function addFishes($new_fishes){
           $this->fishes = $new_fishes;
           $fishes += 1;
       }
       public function setSeaweed($new_seaweed){
           $this->seaweed = $new_seaweed;
           $hasSeaweed = true;
       }
   }

   $forest = new Forest();

   $sea = new Sea();
   $sea->addWhale("whale");
   $sea->addFishes("fish");
   $sea->setSeaweed("seaweed");

   echo "<br>";
   echo $sea->whale;
   echo "<br>";
   echo $sea->fishes;
   echo "<br>";
   echo $sea->seaweed;
   echo "<br>";

   $sea2 = new Sea();
   $sea2->addWhale("whale2");
   $sea2->addFishes("fish2");
   $sea2->setSeaweed("seaweed2");

   echo "<br>";
   echo $sea2->whale;
   echo "<br>";
   echo $sea2->fishes;
   echo "<br>";
   echo $sea2->seaweed;
   echo "<br>";

 

   echo $forest->hasTree;
   
   echo "<br>";
   echo "<br>";



   class Amazon_Account{
       private $name;
       private $id;
       private $password;

       public function setName($new_name){
           $this->name = $new_name;
       }
       public function getName($new_name){
            echo $this->name;
       }
   }

       $toshi = new Amazon_Account();
       $taka = new Amazon_Account();

       $toshi->setName("Toshi");
       $taka->setName("Taka");
       
       $toshi->getName("Toshi");
       $taka->getName("Taka");
       
       echo "<br>";

       class Fruit{
           private $name;
           public static $numOfFruits = 10;

           public function __construct(){
               self::$numOfFruits += 1;
               echo "You add a fruit! <br>";
           }

           public function getName(){
               return $this->Name;
           }

           public function setName($name){
               $this->name = $name;
           }
       
       public static function staticFunction(){
           echo "You called static function";
       }

       public function notStaticFunction(){
           self::staticFunction();
       }
    }

    Fruit::staticFunction();

    $apple = new Fruit();
    $apple->notStaticFunction();

    echo Fruit::$numOfFruits;

    echo "<br>";
    
    $apple = new Fruit();
   
   ?>
</body>
</html>