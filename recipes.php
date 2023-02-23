<<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="styles/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<title>user recipes</title>

<body>
	<div class="recipe_bg-image"></div>
	<div class="bg-text">
				<h2 style="text-shadow:2px 2px dimgray;">
				What's Cooking?
			</h2>

		<nav class="recipenav">
			
			<div class="nav-links">
				<?php 

					if (isset($_SESSION['userType']) == 4 || isset($_SESSION['userType']) == 3) {
						echo "<ul>
							<li><a href='index.php'>Home</a></li>
							<li><a href='aboutus.html'>About Us</a></li>
							<li><a href='events.php'>Events</a></li>
							<li><a href='recipes.php'>Recipes</a></li>
							<li><a href='logout.php'>Logout</a></li>
							</ul>";
					}else{
						echo "<ul>
							<li><a href='signup.html' id='signup'>Sign Up</a></li>
							<li><a href='login.html' id='login'>Log In</a></li>
							<li><a href='index.php'>Home</a></li>
							<li><a href='aboutus.html'>About Us</a></li>
							<li><a href='events.php'>Events</a></li>
							<li><a href='recipes.php'>Recipes</a></li>	
							</ul>";
					}
					
			?>

			</div>
		</nav>

	</div>

	<div class="recipe" style="background-color:antiquewhite;">
		<img src="assets/jrice small.jpeg" alt="food image">
		<p><b>Name:</b></p>
	</div>

<div class="recipe" style="background-color:ghostwhite;">
<img src="assets/jrice small.jpeg" alt="food image">
		<p style="width:10%"><b>Name:</b> Jollof</p>
		<p><b>Description:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et convallis justo. Donec quis libero at ligula mollis euismod ac eu lorem. Cras cursus neque mauris. Vivamus ac dignissim tortor...  </p>
		<p style="width:10%"><b>Relevant Ingredients:</b></p>
			<ul style="padding:10px">
			<li>rice</li>
			<li>tomatoes</li>
			<li>meat</li>
			<li>water</li>
		</ul>
	<p><b>Made Like:</b>User553 </p>
	<p>read more</p>


</div>
<div class="recipe" style="background-color:antiquewhite;">

<img src="assets/waakye.jpg" alt="food image">
		<p style="width:10%"><b>Name:</b> Waakye</p>
		<p><b>Description:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et convallis justo. Donec quis libero at ligula mollis euismod ac eu lorem. Cras cursus neque mauris. Vivamus ac dignissim tortor...  </p>
		<p style="width:10%"><b>Relevant Ingredients:</b></p>
			<ul style="padding:10px">
			<li>rice</li>
			<li>beans</li>
			<li>meat</li>
			<li>weird leaf</li>
		</ul>
	<p><b>Made Like:</b>User557 </p>
<p>read more</p>
	</div>

<a href="recipeForm.html" class="adminbutton">secret button</a>

</body>

</html>