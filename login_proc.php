<?php 

	if (isset($_POST['submitbuttn'])) 
	{
		//collection form data
		$user_email =  $_POST['useremail'];
		$user_pass = $_POST['password'];

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
			echo "<script>console.log('This works')</script>";
			$row = $result->fetch_assoc();
			$userID = $row['userIndex'];
			$user_Email = $row['userEmail'];
			$user_PassdB = $row['userPassword'];
			$user_Type = $row['typeIndex'];

 		}else{
			header("Location: logIn.html");
			echo "<script>console.log('This doesn't work')</script>";
			exit();
			alert("User does not exist");
		}

		if (password_verify($user_pass, $user_PassdB)){
			if ($user_Type == 3) {
				header("Location: index.php");
				exit();
			}elseif ($user_Type == 1) {
				header("Location: adminindex.php");
				exit();
			}
		}else{
			header("Location: logIn.php");
			exit();
			alert("There was an issue");	
		}

		session_start();
		$_SESSION["userID"] = $userID;
		$_SESSION["userEmail"] = $user_Email;
		$_SESSION["userType"] = $user_Type;

		if ($_SESSION["userType"] == 1){
			header("Location: adminIndex.php");
			exit();
		}elseif($_SESSION["userType"] == 3){
			header("Location: index.php");
			exit();
		}elseif($_SESSION["userType"] == 4){
			header("Location: index.php");
			exit();
		}
	}else{
		

		header("Location: login.php");
		exit();
		echo "string";
	}
?>