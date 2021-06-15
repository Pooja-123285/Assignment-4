<!DOCTYPE html>
<html>
<head>
	<title>arithmetic</title>
</head>

<body style="background-color:grey; font-family: 'Pattaya', sans-serif;">
	<h1 style="color:black;font-style:bold;">
		ARITHMETIC OPERATIONS  USING SWITCH CASE 
		
	</h1>

	<h3  style="font-style:italic;color:brown;" >Option-1 = Addition</h3>
	<h3  style="font-style:italic;color:brown;">Option-2 = Subtraction</h3>
	<h3  style="font-style:italic;color:brown;">Option-3 = Multiplication</h3>
	<h3  style="font-style:italic;color:brown;">Option-4 = Division</h3>
	
	<form method="post">
		<table border ="2">
			<tr>
				
				<td> <input type="text" name="num1"
					value="" placeholder="Enter value 1"/>
				</td>
			</tr>

			<tr>
			<td> <input type="text" name="num2" value=""
					placeholder="Enter value 2"/>
				</td>
			</tr>

			<tr>
				<td> <input type="text" name="option" value=""
					placeholder="Enter option 1 - 4 only"/>
				</td>
			</tr>

			<tr>
				<td> <input  style="background-color:brown;color:black;"type="submit" name="submit"
					value="Submit"/>
				</td>
			</tr>
		</table>
	</form>

<br>
<br>
<?php

if(isset($_POST['submit'])) {
	$a = $_POST['num1'];
	$b = $_POST['num2'];
	$ch = $_POST['option'];

	switch($ch) {
		case 1:
			$r = $a + $b;
			echo " Addition of 2 numbers : " . $r ;
			break;

		case 2:
			$r = $a - $b;
			echo " Subtraction of 2 numbers: " . $r ;
			break;

		case 3:
			$r = $a * $b;
			echo " Multiplication of 2 numbers : " . $r ;
			break;

		case 4:
			$r = $a / $b;
			echo " Division of 2 numbers : " . $r ;
			break;

		default:
			echo ("invalid option\n");
	}
	
	return 0;
}
?>

</body>
</html>
