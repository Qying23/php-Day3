<?php 
/**
* 
*/
class Employee {

	public $name;
	public $salary;
	public $position;
	public static $hours = 40;

	// bei funktion abstand und dann unterstrich doppelt
	function __construct($name, $salary, $position){
		$this->name = $name;
		$this->salary = $salary;
		$this->position = $position;
	}

	public function showDetails(){
		return 'My name is ' . $this->name . '. My position in the company  is ' . $this->position . ' and my montly salary is ' . $this->salary . ' Euros for ' . Employee::$hours . 'hours per week.';
	 }

}


class Driver extends Employee{
	public $driving_licence = "C";
	
	public function showDetails(){
		return ' My name is ' . $this->name . '. My position in the company  is ' . $this->position . ' and my montly salary is ' . $this->salary . ' Euros for ' . Employee::$hours . 'hours per week. I have a driving licence ' . $this->driving_licence;
	}
}

$employeeObject1 = new Employee('Martin', '5000', 'Manager');
$result1 = $employeeObject1->showDetails();
echo $result1;

$employeeObject2 = new Driver('Peter', '2000', 'Driver');
$result2 = $employeeObject2->showDetails();
echo $result2;

 ?>