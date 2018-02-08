

<!DOCTYPE html>
<html>
<head>
       <title>HelloWorld OOP</title>
</head>
<body>
<h1>HelloWorld - OOP</h1>


<?php
class HelloWorldOOP
{
       public function displayMessage()
       {
               $myMsg = "Hello World - OOP";
               print $myMsg;
       }
}

$myHelloWorldOOP = new HelloWorldOOP();
$myHelloWorldOOP->displayMessage();

?>
</body>
</html>