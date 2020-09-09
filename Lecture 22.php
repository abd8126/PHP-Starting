<?php
echo 'Enter a number from 1-3';
extract($_POST);
$average =90;
$num = 2;
echo "<br> the entered number is $num";
switch ($num){
/*
{
    case $average > 70:
        $grade = 'A';
        break;

    case $average >= 60 && $average <= 69:
        $grade = 'B';
        break;

    case $average >= 50 && $average <= 59:
        $grade = 'C';
        break;

    default:
        throw new Exception(sprintf('Unable to map average (%d) to a grade.', $average));
}
*/

    case 1:{
        echo "<br> This is Case 1";
        echo "<br> ONE";
        break;
    }
    case 2:{
        echo "<br> This is Case 2 ";
        echo "<br> TWO";
        break;
    }
    case 3:{
        echo "<br> This is Case 3 ";
        echo "<br> THREE";
        break;
    }
    default:
        echo "<br> NO Match is Found";
        echo "<br>Wrong Entry";
}
