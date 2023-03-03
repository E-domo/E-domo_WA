<?php 
	session_start();

	include_once 'connection.php';

	$sql = "SELECT * FROM recipes WHERE status = 1";
	$approved_recipes = $conn->query($sql);
 ?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="styles/style.css">
		  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
						$user_fname = $_SESSION['firstName'];
						echo "
						<h3 style='text-shadow:2px 2px dimgray;'>Welcome home $user_fname</h3>
						<ul>
							<li><a href='index.php'>Home</a></li>
							<li><a href='recipes.php'>Recipes</a></li>
							<li><a href='logout.php'>Logout</a></li>
							</ul>";
					}else{
						echo "<ul>
							<li><a href='signup.html' id='signup'>Sign Up</a></li>
							<li><a href='login.html' id='login'>Log In</a></li>
							<li><a href='index.php'>Home</a></li>
							<li><a href='recipes.php'>Recipes</a></li>	
							</ul>";
					}
					
			?>

			</div>
		</nav>

	</div>

	<?php
		while ($row = mysqli_fetch_assoc($approved_recipes)){
			$recipe_name = $row['recipeName'];
			$recipe_image = $row['recipeImage2'];
			$recipe_description = $row['recipeDescription'];
			$recipe_country = $row['country'];
			$recipe_ingredients = $row['recipeIngredients'];
			$recipe_instructions = $row['cookingInstructions'];
			$recipe_contributor = $row['contributorName'];

			echo "
			<div class='recipe' style='background-color:ghostwhite;'>
			<img src='food/$recipe_image'>
					<p style='width:10%'><b>Name:</b> $recipe_name</p>
					<p><b>Description:</b> $recipe_description</p>
					<p style='width:10%'><b>Relevant Ingredients:</b></p>
						<ul style='padding:10px'>
						<li>$recipe_ingredients</li>
					</ul>
				<p><b>Posted By:</b>$recipe_contributor </p>
				<br>";

				if ((isset($_SESSION['userType']) && ($_SESSION['userType']== 4)) || (isset($_SESSION['userType']) &&  ($_SESSION['userType']== 3))) {
					echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter'>
						  Read <br> More
						</button>
		
						<!-- Modal -->
						<div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
						  <div class='modal-dialog modal-dialog-centered' role='document'>
							<div class='modal-content'>
							  <div class='modal-header'>
								<h5 class='modal-title' id='exampleModalCenterTitle'>$recipe_name</h5>
								<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
								  <span aria-hidden='true'>&times;</span>
								</button>
							  </div>
							  <div class='modal-body'>
								Step 1 <br>
								$recipe_name
									Preheat oven to 400°. In a small saucepan, prepare rice according to package instructions. In a large skillet over medium heat, heat oil. Cook onion until soft, about 5 minutes. Stir in tomato paste and garlic and cook until fragrant, about 1 minute more. Add ground beef and cook, breaking up meat with a wooden spoon, until no longer pink, 6 minutes. Drain fat.
									<br>
									<br>
								Step 2 <br>
									Return beef mixture to skillet, then stir in cooked rice and diced tomatoes. Season with oregano, salt, and pepper. Let simmer until liquid has reduced slightly, about 5 minutes.
									<br>
									<br>
								Step 3<br>
									Place peppers cut side-up in a 9'-x-13' baking dish and drizzle with oil. Spoon beef mixture into each pepper and top with Monterey jack, then cover baking dish with foil.
									<br>
									<br>
								Step 4<br>
									Bake until peppers are tender, about 35 minutes. Uncover and bake until cheese is bubbly, 10 minutes more.
									<br>
									<br>
								Step 5 <br>
									Garnish with parsley before serving.
							  </div>
							  <div class='modal-footer'>
								<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
							  </div>
							</div>
						  </div>
						</div>";
				}else{
					echo "Nothing";
				}

		}
	?>

	<!-- <div class="recipe" style="background-color:antiquewhite;">
		<img src="styles/assets/jrice small.jpeg" alt="food image">
		<p><b>Name:</b></p>
	</div> -->
	

<!-- <div class="recipe" style="background-color:ghostwhite;">
<img src="styles/assets/jrice small.jpeg" alt="food image">
		<p style="width:10%"><b>Name:</b> Jollof</p>
		<p><b>Description:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et convallis justo. Donec quis libero at ligula mollis euismod ac eu lorem. Cras cursus neque mauris. Vivamus ac dignissim tortor...  </p>
		<p style="width:10%"><b>Relevant Ingredients:</b></p>
			<ul style="padding:10px">
			<li>rice</li>
			<li>tomatoes</li>
			<li>meat</li>
			<li>water</li>
		</ul>
	<p><b>Made Like:</b>User553 </p> -->

	<?php  
		// if ((isset($_SESSION['userType']) && ($_SESSION['userType']== 4)) || (isset($_SESSION['userType']) &&  ($_SESSION['userType']== 3))) {
		// 	echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter'>
		// 		  Read <br> More
		// 		</button>

		// 		<!-- Modal -->
		// 		<div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
		// 		  <div class='modal-dialog modal-dialog-centered' role='document'>
		// 		    <div class='modal-content'>
		// 		      <div class='modal-header'>
		// 		        <h5 class='modal-title' id='exampleModalCenterTitle'>Jollof Recipe</h5>
		// 		        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
		// 		          <span aria-hidden='true'>&times;</span>
		// 		        </button>
		// 		      </div>
		// 		      <div class='modal-body'>
		// 		        Step 1 <br>
		// 					Preheat oven to 400°. In a small saucepan, prepare rice according to package instructions. In a large skillet over medium heat, heat oil. Cook onion until soft, about 5 minutes. Stir in tomato paste and garlic and cook until fragrant, about 1 minute more. Add ground beef and cook, breaking up meat with a wooden spoon, until no longer pink, 6 minutes. Drain fat.
		// 					<br>
		// 					<br>
		// 				Step 2 <br>
		// 					Return beef mixture to skillet, then stir in cooked rice and diced tomatoes. Season with oregano, salt, and pepper. Let simmer until liquid has reduced slightly, about 5 minutes.
		// 					<br>
		// 					<br>
		// 				Step 3<br>
		// 					Place peppers cut side-up in a 9'-x-13' baking dish and drizzle with oil. Spoon beef mixture into each pepper and top with Monterey jack, then cover baking dish with foil.
		// 					<br>
		// 					<br>
		// 				Step 4<br>
		// 					Bake until peppers are tender, about 35 minutes. Uncover and bake until cheese is bubbly, 10 minutes more.
		// 					<br>
		// 					<br>
		// 				Step 5 <br>
		// 					Garnish with parsley before serving.
		// 		      </div>
		// 		      <div class='modal-footer'>
		// 		        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
		// 		      </div>
		// 		    </div>
		// 		  </div>
		// 		</div>";
		// }else{
		// 	echo "Nothing";
		// }
	?>

<!-- 	<p>read more</p> -->


</div>
<div class="recipe" style="background-color:antiquewhite;">

<!-- <img src="styles/assets/waakye.jpg" alt="food image">
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
	</div> -->

		<?php 
			if (isset($_SESSION['userType']) == 2 && $_SESSION['userType'] == 2) {
				$user_fname = $_SESSION['firstName'];
				echo "<a href='recipeForm.php' class='adminbutton'>secret button</a>";
			}else{
				echo "";
			}	
		?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>