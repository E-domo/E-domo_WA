<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
</head>
<body>

<div class="logIn_bg-image"></div>

<div class="bg-text">
	<h2 style="text-shadow: 2px 2px dimgray;"> Welcome Back!</h2>
	<div class="nav-links">
		<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="signUp.php">Sign Up</a></li>
	<li><a href="aboutus.php">About Us</a></li>
	<li><a href="events.php">Events</a></li>

	</ul>
</div>
	<form action="login_proc.php" method="POST">
	

			<input type="email" id="useremail" name="useremail" placeholder="Email address" size="20" maxlength="60"><br>


			<input type="password" id="upassword" name="upassword" placeholder="Password" size="20" maxlength="60"><br>
		

	<input type="submit" name="submitbuttn" id="submitbuttn" value="Submit">
	</form>
	
</div>


</div>

</body>
</html>