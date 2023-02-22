<?php 

	if (isset($_POST['login'])) 
	{
		//collection form data
		echo "this works";
		$user_email =  $_POST['useremail'];
		$user_pass = $_POST['upassword'];

		//database connection parameters
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "TBD";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			//stop executing the code and echo error
		  die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM Users WHERE useremail= '$user_email'";
		var_dump($sql);
		$result = $conn->query($sql);

		if ($result->num_rows > 0){
			$row = $result->fetch_assoc();
			$userID = $row['user_id'];
			$user_Name = $row['user_email'];
			$user_Pass = $row['user_pass'];
			$user_Type = $row['userType'];

 		}else{
			header("Location: logIn.html");
			exit();
			alert("User does not exist");
		}

		if (password_verify($user_pass, $user_Pass)){
			if ($user_Status == 2) {
				header("Location: inactive.php");
				exit();
			}
		}else{
			header("Location: login.php");
			exit();
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