<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
</head>
<body>

<div class="signIn_bg-image"></div>

<div class="bg-text">
	<h2 style="text-shadow: 2px 2px dimgray;">Sign Up!</h2>
	<div class="nav-links">
		<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="login.php">Log In</a></li>
	</ul>
</div>
	<form action="signup_proc.php" method="POST">

		<input type="text" id="fname" name="fname" placeholder="First Name" size="20" maxlength="45"><br>


		<input type="text" id="lname" name="lname" placeholder="Last Name" size="20" maxlength="45"><br>



		<input type="email" id="useremail" name="useremail" placeholder="Email address" size="20" maxlength="60"><br>


		
		<input type="password" id="password" name="password" placeholder="Password" size="20" maxlength="60"><br>


		<input type="password" id="password_conf" name="password_conf" placeholder="Confirm Password" size="20" maxlength="60"><br>



		<select name = "dropSelect" id="subscription">
         <option value="holding">Select:</option>
         <option value="4">Customer</option>
         <option value="3">Content Creator</b></option>

      </select>
		<input type="submit" name="submitbuttn" id="submitbuttn" value="Submit">


	</form>
	
</div>


</body>

</html>