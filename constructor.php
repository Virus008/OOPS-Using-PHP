<?php

class ClassA
{
	public function ClassA() //constructor name same as class name or __construct() can be used.
	{
		echo "Constructor 1 ";
	}
}

class ClassB extends ClassA
{
	public function __construct()
	{
		echo parent::ClassA(); // calling constructor if Base class i.e ClassA
		echo "Constructor 2";
	}
}

$obj = new ClassB();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Constructor</title>
</head>
<body>
<p style="font-size: 100%;"> This is an example of <b>CONSTRUCTOR.</b></p>
</body>
</html>