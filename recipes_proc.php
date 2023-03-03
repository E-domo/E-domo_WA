<?php 
session_start();


if (isset($_POST['submit'])) {
	//collecting form data
	$recipe_Name = $_POST['rName'];
	$headline = $_POST['headline'];
	$recipe_Description = $_POST['rDesc'];
	$recipe_Ingredients = $_POST['rIngredients'];
	$recipe_Instructions = $_POST['rInstructions'];
	$recipe_Image = $_FILES['rImage']['name'];
	// var_dump($recipe_Image);
	// print_r($recipe_Image);
	$contributor = $_SESSION['firstName'];

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

	if(is_uploaded_file($_FILES['rImage']['tmp_name'])){
	// Write query
	$sql = "INSERT INTO recipes (recipeName, recipeDescription, recipeImage2, , status, country, cookingInstructions, contributorName)
	VALUES ('$recipe_Name', '$recipe_Description', '$recipe_Image', 2, '$headline', '$recipe_Instructions', '$contributor')";

	// check if query worked
	if ($conn->query($sql)) {
		move_uploaded_file($_FILES['rImage']['tmp_name'], "food/$recipe_Image");
		echo "<script>console.log('Image uploaded successfully')</script>";
	}else{
		echo "<script>alert('Image upload failed')</script>";
		header("Location: index.php");
	}
}
}else{
	header("Location: logIn.php");

	echo "file name is ". $recipe_Image;
}
?>

