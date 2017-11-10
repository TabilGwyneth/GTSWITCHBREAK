<!DOCTYPE HTML>
<html>
<body>

<?php

$x = rand(1,6);

echo $x;
echo "<br>";

switch ($x)  {
     case "1":
         echo "I rolled a one!";
           break;
       case "2":
         echo "I rolled a two!";
           break;
       case "3":
         echo "I rolled a three";
           break;
       default:
         echo "You neither rolled 1, 2, nor 3!";
 }

  
?>
  
</body>
</html>
