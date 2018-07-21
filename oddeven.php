<?php
abstract class definemethod
{
	abstract public function method1();
	abstract public function method2();
}

class oddeven extends definemethod
{
	public $n1;

	public function method1()
	{
		$this->n1 = $_REQUEST['num'];
	}

	public function method2()
	{
		if ($this->n1%2 == 0)
		{
			echo "Number is EVEN";
		}
		else
		{
			echo "Number is ODD";
		}
	}
}

if (isset($_REQUEST['submit']))
{
	$obj = new oddeven();
	$obj->method1();
	$obj->method2();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Odd or Even</title>
</head>
<body>
<p style="font-size: 100%;">To check whether the number is Odd or Even using <b>ABSTRACTION. </b></p>
<form method="post">
	<table align="left" border="1">
		<tr>
			<td>Enter Any No.: </td>
			<td>
				<input type="text" name="num">
			</td>
		</tr>

		<tr>
			<td align="center" colspan="2">
				<input type="submit" name="submit" value="submit">
			</td>
		</tr>
	</table>
</form>
</body>
</html>