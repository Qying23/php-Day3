<!DOCTYPE html>
<html>
<head>
       <title>Simple Class with Return</title>
</head>
<body>
<h1>Simple Class</h1>
<?php
//Define the Class
class SimpleClass
{
   public $myMsg = "My Simple Class with Return";
   public function displayMsg()
       {
               return $this->myMsg;  //return message
       }
}
//Execute Code Using the Class
$mySimpleClass = new SimpleClass();
$rtnVal = $mySimpleClass->displayMsg();
print $rtnVal;
?>
</body>
</html