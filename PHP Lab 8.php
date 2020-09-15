<?php
/*$var = 60;
$num = 45;
switch ($num>$var){
    case 0:
        echo 'True';
        break;
    case 1:
        echo 'False';
        break;
}
*/
$num1 =13;
$num2 =56;
$num3 =78;
echo "<br> The Entered number are : $num1, $num2 and $num3";
switch ($num1>$num2) {
    case 1:
        echo "When Condition 1 is True";
        switch ($num1 > $num3) {
            case 1:
                echo "When Condition 1 is True";
                echo "<br> The Greatest Number is $num1";
                break;
            case 0:
                echo "<br> When Condition 1 is true but condition 2 is False";
                echo "<br> the greatest number is $num1";
                break;
        }
        break;
    case 0:
        echo "<br>When Condition 1 is False";
        switch ($num2 > $num3) {
            case 1:
                echo "When Condition 1 is false but condition 3 is True";
                echo "<br> the greatest number is $num2";
                break;
            case 0:
                echo "When both the condition are false";
                echo "<br> the greatest number is $num3";
                break;
        }
        break;

    
}


?>


