<?php

interface i1 //interface i1 is initiated
{
	public function display1();
}

interface i2   //interface i1 is initiated
{
	public function display2();
}

class MyClass implements i1,i2    //interfaces are invoked in a class using implements keyword
{
	public function display1()
	{
		echo "Method 1 ";
	}

	public function display2()
	{
		echo "Method 2 ";
	}
}

$obj = new MyClass();
$obj->display1();
$obj->display2();
?>