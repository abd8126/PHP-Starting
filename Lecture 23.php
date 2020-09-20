<?php
echo "<h3>Ternary Operator </h3>";
$num =30;
$num2= 45;
//($num>$num2)?echo"greatest number is $num" : echo " greatest number is $num2" ;
$res=($num>$num2)?$num:$num2;
echo "greatest number is $res";
$username = 'Anubhav';
echo '<br>Hello,'.($username?:'Guest User');
?>

<?php
echo "<h3>Null Coalescing Operaror </h3>";
$num =null;
$res=($num??3);
echo $res;
var_dump($num??4);
?>
<?php
echo "<h3>Null Coalescing Operaror Example 2 </h3>";
$num =null;
$num3 = null;
$var =7;
$ab= 9;
var_dump($num??$var??$ab??$num3);
var_dump($num3??$num??$ab??$var);
var_dump(56??$var??$num??$ab);
?>