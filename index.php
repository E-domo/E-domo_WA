<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="styles/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<title>E domo</title>

<body>

		<div class="index_bg-image"></div>

		<div class="bg-text">
			<h1 style="text-shadow:2px 2px dimgray;">
				E domo
			</h1>
			<nav class="nav">
			
			<div class="nav-links">
			<?php 

					if (isset($_SESSION['userType']) == 4 || isset($_SESSION['userType']) == 3) {
						echo "<ul>
							<li><a href='recipes.php'>Recipes</a></li>
							<li><a href='logout.php'>Logout</a></li>
							</ul>";
					}else{
						echo "<ul>
							<li><a href='signup.php' id='signup'>Sign Up</a></li>
							<li><a href='login.php' id='login'>Log In</a></li>
							<li><a href='recipes.php'>Recipes</a></li>	
							</ul>";
					}
					
			?>				
				

			</div>
		</nav>
	</div>


</body>

</html>

<!-- <?php 

	// if ($_SESSION['userType'] == 4) {
	// 	echo '<style type="text/css"
	// 		#login {
	// 			display: none;
	// 		}
	// 		</style>';
	// }

 ?> -->