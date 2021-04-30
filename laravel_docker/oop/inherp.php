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
        class Drink{
            public $name;
            public $price;
            public $amount;

           public function __construct($name, $price, $amount) {
               $this->name = $name;
               $this->price = $price;
               $this->amount = $amount;
           }

           public function introduce(){
               echo "{$this->name} costs {$this->price}$ and its amount is {$this->amount} ml. <br>";
           }

        }
          class HotDrink extends Drink {
              public $addsugar;
              public $addmilk;

              public function additional($addsugar, $addmilk){
                  $this->addsugar = $addsugar;
                  $this->addmilk = $addmilk;
                }
          }

          class ColdDrink extends Drink {
              public $addsyrup;

              public function additional($addsyrup){
                  $this->addsyrup = $addsyrup;
                }
          }

          $taka = new HotDrink("Tea", 2, 200);
          $taka->introduce();
          $taka->addtional("Yes");

          $taka = new ColdDrink("IceCoffee", 4, 500);
          $taka->introduce();


    ?>



    
</body>
</html>