<html>
<body>
<?php
$x = 5;
$y = 10;

function myTest() {
  global $x, $y; 
  //Using Global Keyword be can use the varibale inside and outiside the function
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?>
</body>
</html>
