<?php 

	if (isset($_POST['submitbuttn'])) 
	{
		//collection form data
		echo "this works";
		$user_email =  $_POST['useremail'];
		$user_pass = $_POST['upassword'];

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

		// Checking if user exists
		$sql = "SELECT * FROM users WHERE userEmail= '$user_email'";
		var_dump($sql);
		$result = $conn->query($sql);

		if ($result->num_rows > 0){
			$row = $result->fetch_assoc();
			$userID = $row['userIndex'];
			$user_Name = $row['userEmail'];
			$user_PassdB = $row['userPassword'];
			$user_Type = $row['typeIndex'];

 		}else{
			header("Location: logIn.html");
			exit();
			alert("User does not exist");
		}

		if (password_verify($user_pass, $user_PassdB)){
			if ($user_Type == 3) {
				header("Location: index.html");
				exit();
			}elseif ($user_Type == 1) {
				header("Location: adminindex.html");
				exit();
			}
		}else{
			header("Location: login.html");
			exit();
			alert("There was an issue");	
		}

		session_start();
		$_SESSION["userID"] = $userID;
		$_SESSION["userName"] = $user_Name;
		$_SESSION["userRole"] = $user_Role;

		if ($_SESSION["userRole"] == 1){
			header("Location: adminindex.php");
			exit();
		}else if ($_SESSION["userRole"] == 2){
			header("Location: standardindex.php");
			exit();
		}
	}else{
		

		header("Location: login.php");
		exit();
		echo "string";
	}
?>