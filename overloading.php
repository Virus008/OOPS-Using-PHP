<?php

class myClass
{
	//set function for overloading
	function __set($data, $value)
	{
		echo "__set is called"."<br>";
		echo "Data is: ".$data."<br>";
		echo "Value is: ".$value;
	}
}

$obj = new myClass();
$obj->x=40;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Overloading Example</title>
</head>
<body>
<ul>
	<li>__set(): is run when writing data to inaccessible properties.</li>
	<li>__get(): is utilized for reading data from inaccessible properties.</li>
	<li>__call(): is triggered when invoking inaccessible methods in an object context.</li>
	<li>__isset(): is triggered on inaccessible properties.</li>
</ul>
</body>
</html>