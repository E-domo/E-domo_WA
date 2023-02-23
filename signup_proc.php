<?php 

//check if register form was submited
//by checking if the submit button element name was sent as part of the request

if (isset($_POST['submitbuttn'])) 
{
	//collection form data
	$user_fname = $_POST['fname'];
	$user_name = $_POST['lname'];
	$user_email = $_POST['useremail'];
	$user_pass = $_POST['password'];
	$subs = $_POST['dropSelect'];

	//database connection parameters
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "edomo";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		//stop executing the code and echo error
	  die("Connection failed: " . $conn->connect_error);
	} 

	//encrypt password
	//use the php password_hard function
	$encrypted_pass = password_hash($user_pass, PASSWORD_DEFAULT);

	//write query 
	//user role (1 is admin, 2 is standard user)
	//user status( 1 is active, 2 is inactive)
	$sql = "INSERT INTO users (userEmail, fname, lname, userPassword, typeIndex)
	VALUES ('$user_email', '$user_fname', '$user_lname', '$encrypted_pass', '$subs')";

	// check if query worked
	if ($conn->query($sql) === TRUE) {
	  
		//redirect to homepage
		header("Location: logIn.html");
		exit();

	} else {
		//echo error but continue executing the code to close the session
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	//close database connection
	$conn->close();
}
else
{
	//redirect to register page
	header("Location: signUp.html");
	echo "<script>console.log('Did not work' );</script>";
	exit();
}



?>