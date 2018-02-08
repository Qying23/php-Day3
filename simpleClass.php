
<!DOCTYPE html>
<html>
<head>
       <title>Simple Class</title>
</head>
<body>
<h1>Simple Class</h1>
<?php
//Define the Class
class SimpleClass
{
   public $myMsg = "My Simple Class";
   public function displayMsg()
       {
               print $this->myMsg;
       }
}
//Execute Code Using the Class
$mySimpleClass = new SimpleClass();
$mySimpleClass->displayMsg();
?>
</body>
</html>