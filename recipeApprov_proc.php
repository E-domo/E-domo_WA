<?php 

	if (isset($_POST['approve'])) 
	{
		//collection form data
		// $user_email =  $_POST['useremail'];
		// $user_pass = $_POST['upassword'];
        $buttn_value = $_POST['approve'];

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

        $sql = "UPDATE recipes SET status=1 WHERE recipeNo='$buttn_value'";
		if($conn->query($sql) === TRUE){
			header("Location: recipeApprov.php");

        echo "approve.value";
        echo "this is" .$buttn_value;
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }


	}else{
		
		header("Location: login.php");
			echo "<script>console.log('There was an issue2')</script>";	
		exit();
	}
?>