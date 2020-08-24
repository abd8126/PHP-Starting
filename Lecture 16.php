<html>
<body>
<?php
$num = 678.80;
echo round($num);
echo '<br>';
$sal = 8903.563276;
echo round($sal,2);
echo '<br>';
$new = sprintf('%.3f',1234.5678);
echo $new;
echo '<br>';
printf('%.2f', 53564.45465);
echo '<br>';
echo number_format(100000,2);
echo '<h2 style="background-color: #66bfbf">Arthematic Opearors</h2>';
$a = 6;
$b = 5;
$b = $a+$b;
echo '<br>';
echo "$b";
echo '<br>';
echo 'The division of two no. a and b is'. $a/$b;
echo '<br>';
echo 'The modulus of two no. a and b is'. $a%$b;
echo '<br>';
echo 'The modulus of two no. a and b is'. $a**$b;
?>
</body>
</html>
