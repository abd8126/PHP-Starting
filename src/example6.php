<html>
<body>
<?php
function test(){
	$x = 5; 
	// local varible: only print when value is defined insde function
  echo "<p>Variable x inside function is: $x</p>";
}
test();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>