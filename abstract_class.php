<?php

/** This is an example of Abstract Class **/
Abstract class first
{
	abstract public function display1();
	abstract public function display2();
}

class second extends first
{
	
	public function display1()
	{
		echo "Good Morning";
	}

	public function display2()
	{
		echo " Today is Wednesday";
	}
}

$obj = new second();
$obj->display1();
$obj->display2();
?>