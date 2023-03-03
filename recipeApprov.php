<?php 
	session_start();

	include_once 'connection.php';

	$sql = "SELECT * FROM recipes WHERE status = 2";
	$approved_recipes = $conn->query($sql);
 ?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<title>Recipe Approval</title>

<body style="background-color: navajowhite;">

				<h2 style="text-shadow:2px 2px dimgray;">
				Recipe approval
			</h2>

		<nav class="recipenav">
			
			<div class="nav-links">
				<ul style="text-align: left;">
					<li><a href="adminIndex.php" style="color: dimgray; text-shadow:0px 0px dimgray;">Home</a></li>
					<li><a href="recipeForm.php"  style="color: dimgray; text-shadow:0px 0px dimgray;">Recipe Form</a></li>
					<li><a href="CCapproval.php"  style="color: dimgray; text-shadow:0px 0px dimgray;">CC Approval</a></li>	
					<li><a href="logout.php"  style="color: dimgray; text-shadow:0px 0px dimgray;">Log Out</a></li>
				</ul>

			</div>
		</nav>



		
		
			<div class='container'>
			
	
			<div class='row'>
			<?php while ($row = mysqli_fetch_assoc($approved_recipes)):?>
				<?php
				$recipe_number = $row['recipeNo'];
				$recipe_name = $row['recipeName'];
				$recipe_image = $row['recipeImage2'];
				$recipe_description = $row['recipeDescription'];
				$recipe_country = $row['country'];
				$recipe_ingredients = $row['recipeIngredients'];
				$recipe_instructions = $row['cookingInstructions'];
				$recipe_contributor = $row['contributorName'];
				echo "<script>console.log('$recipe_number')</script>"
				?>
				<div class='col-sm'>
				<div class='new_recipe' style='width: 18rem;'>
				<?php echo "<img class='card-img-top' src='food/$recipe_image'> "?>
				<div class='card-body'>
				<h5 class='card-title'><?php echo $recipe_name;?></h5>
				<p class='card-text'><?php echo $recipe_description;?></p>
				<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter'>
						  Read <br> More
						</button>
				<?php echo"
				<form action='recipeApprov_proc.php' method='POST'>
					<button class='approve' style='height:35px' value='$recipe_number' id='approve' name='approve'>Approve</button> <button class='deny' style='height:35px' value='$recipe_number' id='deny' name='deny'>Deny</button>
				</form>
				";?>
				<?php
				if ((isset($_SESSION['userType']) && ($_SESSION['userType']== 4)) || (isset($_SESSION['userType']) &&  ($_SESSION['userType']== 3))) {
					echo "
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
								$recipe_instructions
							  </div>
							  <div class='modal-footer'>
								<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
							  </div>
							</div>
						  </div>
						</div>";
				}else{
					echo "";
				}

		
	?>
			</div>
			</div>
				</div>
				<?php endwhile; ?>
				<!-- <div class='col-sm'>
				One of three columns
				</div>
				<div class='col-sm'>
				One of three columns
				</div> -->
			</div>
			</div>
			

	


</div>
<!-- <div class="recipe" style="background-color:antiquewhite;">

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
	<p>read more</p><button class="approve">Approve</button><button class="deny">Deny</button>
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
	<p>read more</p><button class="approve">Approve</button><button class="deny">Deny</button>

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
	<p>read more</p><button class="approve">Approve</button><button class="deny">Deny</button>
	</div> -->

<a href="recipeForm.php" class="adminbutton">secret button</a>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php 

	// function approve_recipe($recipe_id){
	// 	include_once 'connection.php';
	// 	// $sql = "SELECT status FROM recipes WHERE recipeNo = recipe_id";
	// 	$sql = mysqli_query($conn, "UPDATE recipes SET status=2 WHERE recipeNo=$recipe_id");
	// 	if($conn->query($sql) === TRUE){
	// 		header("Location: adminIndex.php");
	// 	}

	// }

	// function store_id(){

	// }
	if(isset($POST['approve'])){
		echo "approve.value";
	}else{
		echo "hmmm";
	}

?>

</body>

</html>