<?php 

	// variable scope

	// local vars

	function myFuncOne(){
		$price = 10;
		echo $price;
	}

	// myFuncOne();
	// echo $price;

	function myFuncTwo($age){
		echo $age;
	}

	// myFuncTwo(25);
	// echo $age;

	// global variables

	$name = 'Mark';

	function sayHello(){
		global $name;
		$name = 'Markiee' .'<br>';
		echo "hello $name ";
	}

	sayHello();
	echo $name . '<br>';

	function sayBye(&$name){
		$name = 'Anthony' . '<br>';
		echo "bye $name ";
	}

	sayBye($name);
	echo $name;


?>

<!DOCTYPE html>
<html>
<head>
	<title>UC4 L02 Assignments</title>
</head>
<body>
   <h1>UC4 L02 Variable Scope</h1>
</body>
</html>