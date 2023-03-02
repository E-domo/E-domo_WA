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
		<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="recipes.php">Recipes</a></li>	
	<li><a href="recipeApprov.php">Pending Approvals</a></li>
	</ul>
</div>
	<form enctype="multipart/form-data">

		<input type="text" id="rname" name="rname" placeholder="Recipe Name" size="20" maxlength="45" required><br>
		<input type="text" id="headline" name="headline" placeholder="Country of Origin" size="20" maxlength="15" required><br>


		<input type="textarea" id="rDesc" name="rDesc" placeholder="Recipe Description" size="20" maxlength="300" required><br>
		<input type="textarea" id="rIngredients" name="rIngredients" placeholder="Numbered Ingredients" size="20" maxlength="500" style = "margin: 8px 0px 16px 0px;" required><br>
		
		<input type="textarea" rows = "5" cols = "60" id="rInstructions" name="rInstructions" placeholder="Numbered Cooking Steps" maxlength="500" style = "margin: 8px 0px 16px 0px;" required><br>


		<input type="file" name="rImage" accept="image/png, image/jpeg" id="rImage" style="display: none;">

       	<label for="rImage" style="border: 2px dashed #e3bc9a; border-radius: 5px; padding: 5px 10px 5px 10px; margin: 10px;" >Add Recipe Poster</label>
       		<br>
		<input type="submit" name="submit" id="submit" value="submit" style = "margin: 16px 0px 8px 0px;" onclick="loadRecipe()">

	</form>
	<!-- 
</div> -->

	<!-- script -->
	<script type="text/javascript">
		alert('wahalla oh');
		function loadRecipe(){
			alert('loading recipe');
			var recipeName = document.getElementById('rname');
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
				



	</script>


</body>


</html>