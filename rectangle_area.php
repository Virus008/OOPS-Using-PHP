<?php

interface i1
{
	public function method1();
}
interface i2
{
	public function method2();
}

class getarea implements i1,i2
{
	public $l;
	public $w;
	public $area;

	public function method1()
	{
		$this->l = $_REQUEST['length'];
		$this->w = $_REQUEST['width'];
	}

	public function method2()
	{
		$this->area = $this->l * $this->w;
		echo "Area of Rectangle is: ".$this->area;
	}
}

if (isset($_REQUEST['submit']))
{
	$obj = new getarea();
	$obj->method1();
	$obj->method2();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Interface Assignment</title>
</head>
<body>
<p style="font-size: 100%;">Area of Triangle Using <b>INTERFACE. </b></p>

<form method="post">
	<table align="left" border="1">
		<tr>
			<td>Enter Length:</td>
			<td>
				<input type="text" name="length">
			</td>
		</tr>

		<tr>
			<td>Enter Widht:</td>
			<td>
				<input type="text" name="width">
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