<?php
/* This is method overloading using STATIC keyword*/

class ClassA
{
	static $var = "Good Afternoon";

	public function display()
	{
		return self::$var;
	}
}

class ClassB extends ClassA
{
	
	function show()
	{
		return parent::$var;
	}
}

echo ClassA::$var;
echo "<br>";
echo ClassB::$var;

?>