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
$val_degree=55;
$val_radian=$val_degree*(pi()/180);
echo "<div style='margin-top: 15%'>Value in degree = ".$val_degree." deg"," <br> Value in radian = ".$val_radian." radian"," <br></div>";
$val_radian;
$val_degree=$val_radian*(180/pi());
echo "<div style='margin-top: 15px'>Value in radian = ".$val_radian." radian"," <br> Value in degree = ".$val_degree." deg"," <br></div>";
echo '<div style="margin-top: 20px; border-radius: 15px ; padding: 15px"> <a style="color: white" href="home.php">Back to Main Page</a>'

?>
</body>
</html>