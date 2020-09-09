<?php
/*
$average =90;
echo "<br> The Average is $average";
switch (true){

    case  $average > 70:
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
?>
*/
extract($_POST);
if(isset($save))
{
	switch($ch)
	{
		case '+':
		$res=$fn+$sn;
		break;

		case '-':
		$res=$fn-$sn;
		break;

		case '*':
		$res=$fn*$sn;
		break;

	}

}

?>
<!DOCTYP html>
<html>
	<head>
		<title>Calculator- switch</title>

	</head>
	<body>
		<form method="post">
		<table border="1" align="center">
			<tr>
				<th>Your Result</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>"/></th>
			</tr>

			<tr>
				<th>Enter your First num</th>
				<th><input type="number" name="fn" value="<?php  echo @$fn;?>"/></th>
			</tr>
			<tr>
				<th>Enter your Second num</th>
				<th><input type="number" name="sn" value="<?php  echo @$sn;?>"/></th>
			</tr>
			<tr>
				<th>Select Your Choice</th>
				<th>
				<select name="ch">
					<option>+</option>
					<option>-</option>
					<option>*</option>
				</select>
				</th>
			</tr>
			<tr>

				<th colspan="2">
				<input type="submit"
				name="save" value="Show Result"/>
				</th>
			</tr>
		</table>
		</form>
	</body>
</html>

