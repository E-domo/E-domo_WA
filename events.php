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

		<div class="Events_bg-image"></div>

		<div class="bg-text">
			<h2 style="text-shadow: 2px 2px dimgray;">Recent Events</h2>
				
			
			<nav class="nav">
			
			<div class="nav-links">

				<?php 

					// if ($session_status) {
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
								<li><a href='index.php'>Home</a></li>
								<li><a href='signup.html' id='signup'>Sign Up</a></li>
								<li><a href='login.html' id='login'>Log In</a></li>
								<li><a href='aboutus.html'>About Us</a></li>
								<li><a href='events.php'>Events</a></li>
								<li><a href='recipes.php'>Recipes</a></li>	
								</ul>";
							}
					
			?>
>>>>>>> a3e969da8be8240fe2535107361ec513c67d49a1
			</div>
		</nav>
		<p style="color: gray; text-shadow: 1px 1px black"> &darr; &darr; scroll down to see recent events &darr; &darr;;</p>

</div>

<div class="row">
  <div class="column">
    <img src="assets/fieri.png">
     <img src="assets/gordon.png">

  </div>
  <div class="column">
    <img src="assets/matty.png">
    <img src="assets/flay.png">

  </div>


	</div>




</body>

</html>


<!-- 
<?php

	// if ($_SESSION['']) {
	// 	# code...
	// }

?> -->