
<!DOCTYPE html>
<html>
<head>
       <title>HelloWorld OOP - Static</title>
</head>

<body>
        <h1>HelloWorld - OOP - Static</h1>

<?php
class HelloWorldOOPStatic
{
       public static function displayMessage()
       {
               $myMsg = "Hello World - OOP Static";
               print $myMsg;
       }
}
HelloWorldOOPStatic::displayMessage();
?>

</body>
</html>