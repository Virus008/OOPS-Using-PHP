<?php
class ClassA
{
	public function display()
	{
		echo "Example of....";
	}
}

class ClassB extends ClassA
{
	public function show()
	{
		echo "Inheritance";
	}
}

$obj = new ClassB();
$obj->display();
$obj->show();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inheritance</title>
</head>
<body>
	<h3>PHP Supports only SINGLE LEVLE inheritance.</h3>
	<h3>INTERFACE used to achieve MULTIPLE INHERITANCE.</h3>
</body>
</html>