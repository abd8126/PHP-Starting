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
$val_km=55;
$val_inches=$val_km*39370.1;
echo "<h1>Value in km = ".$val_km." km"," <br> Value in inches = ".$val_inches." inch"," <br></h1>";
echo '<div style="text-align : center; font-size: 30px; border: 2px white; border-radius: 15px; width: 50%; margin-left: 300px;padding: 35px; background: darkslategrey;  "><a style="color: white" href="home.php">Back to Main Page</a> </div>';

?>
</body>
</html>