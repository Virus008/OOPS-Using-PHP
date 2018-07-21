<?php

class getdata
{
	public $n1;
	public $n2;
	public $result;

	public function getdata()
	{
		$this->n1 = $_REQUEST['num1'];
		$this->n2 = $_REQUEST['num2'];
	}

	public function display()
	{
		$this->result = $this->n1 + $this->n2;
		echo "Addition is: ".$this->result;
	}
}

if (isset($_REQUEST['submit']))
{
	$obj = new getdata();
	$obj->display();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Addition</title>
</head>
<body>
<p> Addition of two numbers using <b>CONSTRUCTOR & DESTRUCTOR.</b></p>

<form method="post">
	<table align="left" border="1">
		<tr>
			<td>Enter Number 1: </td>
			<td>
				<input type="text" name="num1">
			</td>
		</tr>

		<tr>
			<td>Enter Number 2: </td>
			<td>
				<input type="text" name="num2">
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