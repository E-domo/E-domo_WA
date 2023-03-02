	<?php
	session_start();
	if (isset($_SESSION['userType']) != 1) {
			header("Location: logIn.php");
			exit();
		}
	else{
		echo "success";
		}

	?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="styles/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<title>E domo</title>

<body>

		<div class="AI_bg-image"></div>

		<div class="bg-text">
			<h1 style="text-shadow:2px 2px dimgray;">
				E domo
			</h1>
			<h3 style="color:whitesmoke; text-shadow:2px 2px dimgray;">ADMIN</h3>
			<nav class="nav">
			
			<div class="nav-links">
				<ul>
					<li><a href="logout.php">Log Out</a></li>
					<li><a href="CCapproval.php">CC Approval</a></li>	
					<li><a href="recipeForm.php">Recipe Form</a></li>
					<li><a href="recipeApprov.php">Recipe Approval</a></li>
				</ul>

			</div>
		</nav>
	</div>


</body>

</html>