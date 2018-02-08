<!DOCTYPE html>
<html>
<head>
       <title>SleptYearsPassData</title>
</head>
<body>
<h1>SleptYearsPassData</h1>
<?php
//Define the Class
class SleptYearsPassData
{
   public $hoursSleptperNight = 8;
   public $myAge = 54;
   public function calcSleptYears($a_hoursSleptperNight, $a_myAge)
       {
               $sleptYears = ($a_myAge * $a_hoursSleptperNight)/24;
               return $sleptYears;
       }
}
//Execute Code Using the Class
$mySleptYearsPassData = new SleptYearsPassData();
$rtnVal
 = $mySleptYearsPassData->calcSleptYears($mySleptYearsPassData->myAge, $mySleptYearsPassData->hoursSleptperNight);
print "You have slept $rtnVal years of your life away!";
?>
</body>
</html>