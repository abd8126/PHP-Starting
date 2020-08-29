<!DOCTYPE html>
<html>
<body background="abc.jpg">
<style type="text/css">
    div{
        text-align: center;
        font-size: 30px;
        border: 2px white;
        border-radius: 15px;
        width :50%;
        margin-left: 300px;
        background: darkslategrey;
        color: white;
    }
</style>
<?php
$val_celsius=37;
$val_F=($val_celsius*(9/5))+32;
echo "<div style='margin-top: 15%'>Value in deg celsius = ".$val_celsius." deg. Celcius"," <br> Value in Fahrenheit = ".$val_F." deg. Fahrenheit."," <br></div>";
$val_celsius=($val_F-32)*(5/9);
echo "<div style='margin-top: 15px'>Value in deg Fahreheit = ".$val_F." deg. Fahrenheit"," <br> Value in Celsius = ".$val_celsius." deg.celsius"," <br></div>";
echo '<div style="margin-top: 20px; border-radius: 15px ; padding: 15px"> <a style="color: white" href="home.php">Back to Main Page</a>'

?>