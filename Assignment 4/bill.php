<!DOCTYPE html>
<html>
<body>
<style type="text/css">
body{
background-image: url("abc.jpg") ;
}
h1{
text-align: center;
text-decoration: underline;
color: white;
font-size: 40px;
}
div{
border: 3px double gold;
margin-left: 120px;
margin-right: 120px;
padding: 50px;
transform: .5s background-color;
}
div:hover{
background-color:darkorange;
}
h2{
text-align: center;
color: red;
font-size: 34px;
}
</style>
<div>
    <h2>Question</h2><br>
    <h3 style="color: white">Title : PHP code to calculate Electricity Bill Given an integer U denoting the amount of KWh units of electricity consumed, the task is to calculate the electricity bill with the help of the below charges: Along with a fixed charge of Rs 210bill 1 to 100 units – Rs 3. 30unit 100 to 200 units – Rs 4. 00unit 200 to 300 units – Rs 5. 25unit above 300 units – Rs 6. 25unit </h3>
</div>
<?php
echo " <h1> Calculate Electricity Bill </h1><br>";
$U=200;
echo " <div><h1 > Elecricity Consumed= ".$U."Units<br></h1>";
if($U>0 and $U<=100){
$amt=$U*3.30;
$totalamt=$amt+(3.30*(10/100));
echo " <h2>Total amount= ".$totalamt."Rs<br></h2>";
}
elseif ($U>100 and $U<=200) {
$amt=(100*3.30)+(($U-100)*4);
$totalamt=$amt+(4*(10/100));
echo " <h2>Total amount= ".$totalamt."Rs<br></h2>";
}
elseif ($U>200 and $U<=300) {
$amt=(100*3.30)+(100*4)+(($U-200)*5.25);
$totalamt=$amt+(5.25*(10/100));
echo " <h2>Total amount= ".$totalamt."Rs<br></h2>";
}
else{
$amt=(100*3.30)+(100*4)+(100*5.25)+(($U-300)*6.25);
$totalamt=$amt+(6.25*(10/100));
echo " <h2>Total amount= ".$totalamt."Rs<br></h2></div>";
}
?>
</body>
</html>