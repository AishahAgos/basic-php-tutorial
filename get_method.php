<!DOCTYPE html>
<html>
<head>
	<title>GET Method</title>
</head>
<body>
	<h1>GET Method</h1>

	<!--
		WARNING!
		Get method will expose the data retrieve from the form at the URL.
		It is not suitable for data which need to be highly-secured.
		Hence, POST method is more recommended.
		However, you can call rest of the data with reference to the ID (arraylist or database is REQUIRED).
	-->
	
	<form method="GET">
		First name : <input type="text" name="firstname"><br/><br/>
		Last name : <input type="text" name="lastname"><br/><br/>
		Age : <input type="number" name="age"><br/><br/>
		Birth Date : <input type="date" name="birthdate"><br/><br/>
		Email : <input type="email" name="email"><br/><br/>
		Password : <input type="password" name="password"><br/><br/>

		<!-- 
			By default, button will lead to "Submit" action. 
			To change the function of the button, change the type of the button
		-->

		<button name="submit">Submit</button> <button type="reset">Reset</button>
	</form>

	<?php

		//this php codes will show you how to retrieve the data from the form and display the data using GET method
		//call the data by using the "name"
		//make sure you name your 'submit' and call it for GET method
		if (isset($_GET['submit'])) {
			$fname = $_GET['firstname'];
			$lname = $_GET['lastname'];
			$myage = $_GET['age'];
			$mybirth = $_GET['birthdate'];
			$myemail = $_GET['email'];
			$mypass = $_GET['password'];
			$fullname = $fname." ".$lname;

			define("GREETING", "Welcome to this site, ");

			echo "<br><br><hr><br>";
			echo GREETING . $fullname . "! <br/>";
			echo "Age : " . $myage . "<br/>";
			echo "Birth date : " . $mybirth . "<br/>";
			echo "Email : " . $myemail . "<br/>";

		}

	?>

	<br><br><br>
	<a href="index.php">Back to MENU</a>
</body>
</html>