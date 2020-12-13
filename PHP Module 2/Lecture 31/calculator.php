<html>
<body>
<?php
$first_number = $_POST[fnum];
$second_number = $_POST[snum];
echo "The First number is : $first_number";
echo "<br>";
echo "The Second number is : $second_number";
echo "<br>";
$ope = $_POST['operator'];
switch ($ope) {
    case "Add" :
        $result = $first_number + $second_number;
        echo "The Addition of Two Number is : $result";
        break;
    case "Sub" :
        $result = $first_number - $second_number;
        echo "The Subtraction of Two Number is : $result";
        break;
    case "Mul" :
        $result = $first_number * $second_number;
        echo "The Mul of Two Number is : $result";
        break;
    case "Div" :
        $result = $first_number / $second_number;
        echo "The Division of Two Number is : $result";
        break;
}
?>
</body>
</html>

