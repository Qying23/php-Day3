<?php
class FruitConstructor
{
   public $apples;
   public $oranges;
   public $bananas;
   function __construct($apple_arg, $orange_arg, $banana_arg)
   {
       $this->apples   = $apple_arg;
       $this->oranges  = $orange_arg;
       $this->bananas  = $banana_arg;
   }
   public function addFruit()
   {
       $totalFruit = $this->apples + $this->oranges + $this->bananas;
       return $totalFruit;
   }
}
$myFruit = new FruitConstructor(3, 7, 5);
$rtnVal = $myFruit->addFruit();
print "You have $rtnVal pieces of fruit";
?>
