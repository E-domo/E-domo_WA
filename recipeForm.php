<?php 
session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recipe Form</title>
</head>
<body>

<div class="signIn_bg-image"></div>

<div class="bg-text">
	<h2 style="text-shadow: 2px 2px dimgray;">Recipe Form</h2>
	<div class="nav-links">
	<?php 

		if (isset($_SESSION['userType']) == 1) {
			$user_fname = $_SESSION['firstName'];
			echo "
			<h3 style='text-shadow:2px 2px dimgray;'>Welcome home $user_fname</h3>
			<ul>
				<li><a href='adminIndex.php'>Admin Home</a></li>
				<li><a href='index.php'>Home</a></li>
				<li><a href='recipes.php'>Recipes</a></li>
				<li><a href='recipeApprov.php'>Pending Approvals</a></li>
			</ul>";
		}elseif (isset($_SESSION['userType']) == 2){
			echo "
			<ul>
				<li><a href='index.php'>Home</a></li>
				<li><a href='recipes.php'>Recipes</a></li>
			</ul>";
		}

	?>
		<!-- <ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="recipes.php">Recipes</a></li>	
	<li><a href="recipeApprov.php">Pending Approvals</a></li>
	</ul> -->
</div>
	<form enctype="multipart/form-data" method="POST" action="recipes_proc.php">

		<input type="text" id="rName" name="rName" placeholder="Recipe Name" size="20" maxlength="45" required><br>
		<input type="text" id="headline" name="headline" placeholder="Country of Origin" size="20" maxlength="15" required><br>


		<textarea id="rDesc" name="rDesc" placeholder="Recipe Description" rows="3" cols="56" required></textarea><br>

		<textarea id="rIngredients" name="rIngredients" placeholder="Recipe Ingredients" rows="3" cols="56" required></textarea><br>
		
		<textarea id="rInstructions" name="rInstructions" placeholder="Cooking Steps" rows="3" cols="56" required></textarea><br>


		<input type="file" name="rImage" accept="image/png, image/jpeg" id="rImage" style="display: none;">

       	<label for="rImage" style="border: 2px dashed #e3bc9a; border-radius: 5px; padding: 5px 10px 5px 10px; margin: 10px; margin-top: 20px;" >Add Recipe Poster</label>
       		<br>
		<input type="submit" name="submit" id="submit" value="submit" style = "margin: 16px 0px 8px 0px;" onclick="loadRecipe()">

	</form>
	<!-- 
</div> -->

	<!-- script -->
	<!-- <script type="text/javascript">

		document.querySelector("textarea").setSelectionRange(0,0); // place cursor at start

		function loadRecipe(){
			alert('loading recipe');
			var recipeName = document.getElementById('rName');
			var headline = document.getElementById('headline');
			var recipeDesc = document.getElementById('rDesc');
			var recipeIngredients = document.getElementById('rIngredients');
			var recipeInstructions = document.getElementById('rInstructions');
			var recipeImage = document.getElementById('rImage');
			var submit = document.getElementById('submit');
			loadDoc(recipeName, headline, recipeDesc, recipeIngredients, recipeInstructions, recipeImage, submit);
		}
		// function loadDoc(recipeName, headline, recipeDesc, recipeIngredients, recipeInstructions, recipeImage){
		// 	const xhttp = new XMLHttpRequest();
		// 	xhttp.onload = function();
		// }

		// xhttp.open("GET", "recipes_proc.php?rName=" + recipeName.value + "&headline=" + headline.value + "&rDesc=" + recipeDesc.value + "&rIngredients=" + recipeIngredients.value + "&rInstructions=" + recipeInstructions + "&rImage=" + "img.png" + "&submit=" + submit.value, true);
		// xhttp.send();

		function loadDoc(recipeName, headline, recipeDesc, recipeIngredients, recipeInstructions, recipeImage, submit) {
				  const xhttp = new XMLHttpRequest();
				  xhttp.onload = function() {
				  	alert('first success');
				  }

				  // xhttp.open("POST", "recipes_proc.php");
				  // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				  // xhttp.send("rName=" + recipeName.value + "&headline=" + headline.value + "&rDesc=" + recipeDesc.value + "&rIngredients=" + recipeIngredients.value + "&rInstructions=" + recipeInstructions.value + "&rImage=" + recipe_image.files[0] + "&submit=" + submit);
				  // alert('more success');
				  // console.log(recipe_image.value)

				  const formData = new FormData();
				  formData.append('rName', recipeName.value);
				  formData.append('headline', headline.value);
				  formData.append('rDesc', recipeDesc.value);
				  formData.append('rIngredients', recipeIngredients.value);
				  formData.append('rInstructions', recipeInstructions.value);
				  formData.append('rImage', recipeImage.files[0]);
				  formData.append('submit', submit.value);

				  console.log(recipeImage.files[0]);
				  console.log(formData.get("rImage"));
				  console.log(formData.get("rName"));
				  console.log("This is "+ formData.get("submit"));
				  xhttp.open("POST", "recipes_proc.php");
 				  xhttp.send(formData);
		}
				



	</script> -->



</body>


</html>