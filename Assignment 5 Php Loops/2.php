<html>
<head>
    <title> Natural Number 1 to n</title>
</head>
<body bgcolor="Orange">
<h1 align="center" >Natural Number</h1>
<form method="POST">
    <label>Enter Range of Number </label>
    <input type="number" name="range" size="10" >
    <input type="submit" name="submit" >
</form>
<?php
$range=$_POST['range'];
if(isset($range)){
    $i=0; while($i<=$range)
    {
        echo "$i   ";
        $i++;
    }
}
?>
</body>
</html>
