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
   

   public function calcSleptYears($a_hoursSleptperNight, $a_myAge)
       {
               $sleptYears = ($a_myAge * $a_hoursSleptperNight)/24;
               return $sleptYears;
       }
}
//Execute Code Using the Class
$mySleptYearsPassData = new SleptYearsPassData();

$hoursPerNight = 8;
$theAge = 54;
$rtnVal = $mySleptYearsPassData->calcSleptYears($hoursPerNight, $theAge);
print "You have slept $rtnVal years of your life away!";
?>
</body>
</html>