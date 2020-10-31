<html>
<head>
    <title> Reverse Natural Number n to 1</title>
</head>
<body bgcolor="Orange">
<h1 align="center" >Reverse Natural Number</h1>
<form method="POST">
    <label>Enter Range of Number </label>
    <input type="number" name="range" size="10" >
    <input type="submit" name="submit" >
</form>
<?php
$range=$_POST['range']; if(isset($range)){
    while($range>0)
    {
        echo "$range ";
        $range--;
    }
}
?>
</body>
</html>
