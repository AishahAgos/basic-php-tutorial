<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Declare Variable</h1>

	<?php

		//variable in PHP must be declared by using dollar sign ($)
		//variable should be initialized 
		//variable should always follow after the '$'

		//int, string
		$age = 22;
		$name = "Aishah";

		//display the variable
		//connect the variable with other output using the dot(.) 
		//unlike java (java use + to connect sentences)
		echo "My name is " . $name.".";
		echo "<br>";
		echo "I am " . $age . " years old.";

	?>

	<!-- pre tag: recommended in displaying error messages @ technical details -->
	<pre>
		<?php var_dump($name); ?>
		<?php var_dump($age); ?>
	</pre>

	<br><br><br>
	<a href="index.php">Back to MENU</a>
</body>
</html>