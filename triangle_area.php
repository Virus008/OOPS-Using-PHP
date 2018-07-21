<?php

class getdata
{
	public $h;
	public $b;

	public function method1()
	{
		$this->h = $_REQUEST['height'];
		$this->b = $_REQUEST['base'];
	}
}

class findarea extends getdata
{
	public $area;
	public function method2()
	{
		$this->area = ($this->h * $this->b)/2;
		echo "Area of Triangle is: ".$this->area;
	}
}

if (isset($_REQUEST['submit']))
{
	$obj = new findarea();
	$obj->method1();
	$obj->method2();	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inheritance Assignment</title>
</head>
<body>
<p style="font-size: 100%;">Area of Triangle Using <b>INHERITANCE. </b></p>

<form method="POST">
	<table align="left" border="1"> 
		<tr>
			<td>Enter Height:</td>
			<td>
				<input type="text" name="height">
			</td>
		</tr>

		<tr>
			<td>Enter Base:</td>
			<td>
				<input type="text" name="base">
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