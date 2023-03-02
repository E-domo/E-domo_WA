<?php 

	if (isset($_POST['submitbuttn'])) 
	{
		//collection form data
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
			echo "<script>console.log('This works')</script>";
			$row = $result->fetch_assoc();
			$userID = $row['userIndex'];
			$user_Fname = $row['fname'];
			$user_Email = $row['userEmail'];
			$user_PassdB = $row['userPassword'];
			$user_Type = $row['typeIndex'];

 		}else{
			header("Location: logIn.php");
			echo "<script>alert('User does not exist')</script>";
			exit('issue 1');

		}

		if (password_verify($user_pass, $user_PassdB)){
			echo "<script>console.log('This works as well')</script>";
			session_start();
			$_SESSION["userID"] = $userID;
			$_SESSION["userEmail"] = $user_Email;
			$_SESSION["firstName"] = $user_Fname;
			$_SESSION["userType"] = $user_Type;

			if ($_SESSION["userType"] == 1){
				echo "<script>console.log('You are an admin')</script>";	
				header("Location: adminIndex.php");
				exit();
			}elseif($_SESSION["userType"] == 3){
				echo "<script>console.log('You are a customer')</script>";	
				header("Location: index.php");
				exit();
			}elseif($_SESSION["userType"] == 4){
				echo "<script>console.log('you are a content creator')</script>";	
				header("Location: index.php");
				exit();
			}
		}else{
			header("Location: logIn.php");
			echo "<script>console.log('There was an issue1')</script>";	
			exit();
			}

		// session_start();
		// $_SESSION["userID"] = $userID;
		// $_SESSION["userEmail"] = $user_Email;
		// $_SESSION["firstName"] = $user_Fname;
		// $_SESSION["userType"] = $user_Type;

		// if ($_SESSION["userType"] == 1){
		// 	echo "<script>alert('You are an admin')</script>";	
		// 	header("Location: adminIndex.php");
		// 	exit();
		// }elseif($_SESSION["userType"] == 3){
		// 	echo "<script>alert('You are a customer')</script>";	
		// 	header("Location: index.php");
		// 	exit();
		// }elseif($_SESSION["userType"] == 4){
		// 	echo "<script>alert('you are a content creator')</script>";	
		// 	header("Location: index.php");
		// 	exit();
		// }
	}else{
		
		header("Location: login.php");
			echo "<script>consle.log('There was an issue2')</script>";	
		exit();
	}
?>