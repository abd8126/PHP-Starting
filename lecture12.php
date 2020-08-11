<body style="border: dashed orangered" topmargin="50">
<?php
echo "<center><h1>Lecture 12</h1></center>";
$roll=array(1,2,3,4);
$marks=[95,96,98,87];
$sal=[100,200,300,400];
$name=array('anubhav','raghav','vaibhav','kanha');
print_r($roll);
print_r($marks );
echo'var_dump function Start <br>';
var_dump($sal );
var_dump($name);
$student  = ['Anubhav',152,89.5];
print_r($student,false);
var_dump($student);
$b=['Anubhav'=>'25','Raghav'=>'36'];
print_r($b);
var_dump($b);
$x=null;
var_dump($x);
?>
</body>

