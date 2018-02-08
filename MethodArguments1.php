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
$rtnVal = $mySleptYearsPassData->calcSleptYears(54,8);
print "You have slept $rtnVal years of your life away!";
?>
</body>
</html>