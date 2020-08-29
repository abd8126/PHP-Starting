3a.php:
<!DOCTYPE html>
<html>
<body background="abc.jpg">
<style type="text/css">
    h1{
        text-align: center;
        margin-top: 15%;
        padding: 35px;
        border: 2px white;
        border-radius: 15px;
        width :50%;
        margin-left: 300px;
        background: darkslategrey;
        color: white;
    }
</style>
<?php
$val_meter=45;
$val_centimeter=$val_meter*100;
echo "<h1>Value in meter = ".$val_meter."m"," <br> Value in centimeter = ".$val_centimeter."cm"," <br></h1>";
echo '<div style="text-align: center; font-size: 30px; border: 2px white; border-radius: 15px; width: 50%; margin-left: 300;padding: 35px; background: darkslategrey;  "><a style="color: white" href="home.php">Back to Main Page</a> </div>';
?>
</body>
</html>