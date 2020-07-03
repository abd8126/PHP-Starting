<html>
<head>
<?php
$x = 15;
function test(){ 
//global variable(in this value is print which is outside the function
  echo "<p>Variable x inside function is: $x</p>";
}
test();
  echo "<p>Variable x outside function is: $x</p>";
?>
</body>
</html>