<?php
Class Employee {
 public $salary = "3500";
}
Class Driver extends Employee {
 public $name = "John";
 public $position = "driver";
 public function showDetails() {
   return 

     'My name is ' . $this->name .

     ' and my position in the company is ' . $this->position .

     ', my monthly salary is ' . $this->salary . ' Euros';
 }
}
$driverObj = new Driver();
$result = $driverObj->showDetails();
echo $result;
?>

