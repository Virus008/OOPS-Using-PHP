<?php
echo "This is example of type hinting."."<br>";
class a
{
	public $var = "<br>"."hello";
}

function display(a $a1)
{
	//call variable
	echo $a1->var;
}

display(new a());

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p><b>Type Hinting</b> is the method by which we can force the function to accept the desited data type.</p>
</body>
</html>