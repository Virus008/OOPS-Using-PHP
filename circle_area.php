<?php
/*   This is an exmaple of Class and Object */
class Area_of_Circle
{
	
	public function calculate($radius)
	{
		$pi = 3.14;
		$area = $pi*$radius*$radius;
		echo "Area of Circle is:".$area;
	}
}

if (isset($_REQUEST['submit'])) 
{
	$r = $_REQUEST['radius'];
	$obj = new Area_of_Circle();
	$obj->calculate($r);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Area Of Circle</title>
</head>
<body>
<form method="POST">
	<table align="left" border="1">
		<tr>
			<td>Enter Radius:</td>
			<td><input type="text" name="radius"></td>
		</tr>

		<tr>
			<td align="center" colspan="2">
				<input type="submit" name="submit" value="Submit">
			</td>
		</tr>
	</table>
</form>
</body>
</html>