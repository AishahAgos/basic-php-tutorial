<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
</head>
<body>
	<h1>Form Validation</h1>

	<!-- 
		1. Validation is REQUIRED to ensure that the user give a correct input for each field.
		2. Just add the keyword "required" at the input field	
		3. HTML5 has predefined keyword for the error message. #required (in detail no.2)
	-->

	<form method="POST">
		First name : <input type="text" name="firstname" required=""><br/><br/>
		Last name : <input type="text" name="lastname" required=""><br/><br/>
		Age : <input type="number" name="age"><br/><br/>
		Birth Date : <input type="date" name="birthdate"><br/><br/>
		Email : <input type="email" name="email" required=""><br/><br/>
		Password : <input type="password" name="password" required=""><br/><br/>
		Gender : 
		<input type="radio" name="gender" value="Female" required=""> Female
		<input type="radio" name="gender" value="Male" required=""> Male
		<input type="radio" name="gender" value="Other" required=""> Other
		<br/><br/>

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
			$mygender = $_POST['gender'];
			$fullname = $fname." ".$lname;

			define("GREETING", "Welcome to this site, ");

			echo "<br><br><hr><br>";
			echo GREETING . $fullname . "! <br/>";
			echo "Age : " . $myage . "<br/>";
			echo "Birth date : " . $mybirth . "<br/>";
			echo "Email : " . $myemail . "<br/>";
			echo "Gender : " . $mygender . "<br/>";

		}

	?>

	<br><br><br>
	<a href="index.php">Back to MENU</a>

</body>
</html>