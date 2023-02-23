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
	<li><a href="index.html">Home</a></li>
	<li><a href="recipes.html">Recipes</a></li>	
	<li><a href="recipeApprov.html">Pending Approvals</a></li>
	</ul>
</div>
	<form id = "recipeform" action="recipe_proc.php">

		<input type="text" id="rname" placeholder="Recipe Name" size="20" maxlength="45" required/><br>
		<input type="text" id="headline" placeholder="Country of Origin" size="20" maxlength="15" required/><br>


		<input type="textarea" id="rDesc" placeholder="Recipe Description" size="20" maxlength="300" required/><br>
		<input type="textarea" id="rIngredients" placeholder="Numbered Ingredients" size="20" maxlength="500" style = "margin: 8px 0px 16px 0px;" required/><br>
		
		<input type="textarea" rows = "5" cols = "60" id="rInstructions" placeholder="Numbered Cooking Steps" maxlength="500" style = "margin: 8px 0px 16px 0px;" required/><br>


		<input type="file" name="rposter" accept="image/png, image/jpeg" id="myimg" style="display: none;"/>

       	<label for="myimg" style="border: 2px dashed #e3bc9a; border-radius: 5px; padding: 5px 10px 5px 10px; margin: 10px;" >Add Recipe Poster</label>
       		<br>
		<input type="submit" name="submitbuttn" style = "margin: 16px 0px 8px 0px;">



	</form>
	
</div>


</body>


</html>