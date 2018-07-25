<!DOCTYPE html>
<html>
<head>
	<title>POST Method</title>
</head>
<body>
	<h1>POST Method</h1>

	<!--
		- POST method usually applied to retrieve data from the form.
		- POST display data retrieved secrectly without exposing the content in the URL
		- include "ACTION" if you want to display the data in another file later; else "METHOD" is enough
	-->


	<form method="POST">
		First name : <input type="text" name="firstname" required=""><br/><br/>
		Last name : <input type="text" name="lastname"><br/><br/>
		Age : <input type="number" name="age"><br/><br/>
		Birth Date : <input type="date" name="birthdate"><br/><br/>
		Email : <input type="email" name="email" required=""><br/><br/>
		Password : <input type="password" name="password"><br/><br/>

		<!-- 
			By default, button will lead to "Submit" action. 
			To change the function of the button, change the type of the button
		-->

		<button name="submit">Submit</button> <button type="reset">Reset</button>
	</form>

	<?php

		//this php codes will show you how to retrieve the data from the form and display the data using POST method
		//call the data by using the "name"
		//make sure you name your 'submit' and call it for POST method
		if (isset($_POST['submit'])) {
			$fname = $_POST['firstname'];
			$lname = $_POST['lastname'];
			$myage = $_POST['age'];
			$mybirth = $_POST['birthdate'];
			$myemail = $_POST['email'];
			$mypass = $_POST['password'];
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