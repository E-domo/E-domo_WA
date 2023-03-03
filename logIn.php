<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<script src="myjs/login.js"></script>
</head>
<body>

<div class="logIn_bg-image"></div>

<div class="bg-text">
	<h2 style="text-shadow: 2px 2px dimgray;"> Welcome Back!</h2>
	<div class="nav-links">
		<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="signUp.php">Sign Up</a></li>

	</ul>
</div>
	<form action="login_proc.php" method="POST" name="loginForm" onsubmit="return validateEmail() & validatePass();">
	
		<div class="form-group" id="email-div">

			<input type="email" id="useremail" name="useremail" placeholder="Email address" value= "" size="20" maxlength="60"><br>
		
		</div>

		<div class="form-group" id="pass-div">

			<input type="password" id="upassword" name="upassword" placeholder="Password" value= "" size="20" maxlength="60"><br>
		
		</div>

	<input type="submit" name="submitbuttn" id="submitbuttn" value="Submit">
	</form>
	
</div>


</div>

</body>

<!-- Email an dpassword validation -->

<script>
	function validateEmail(){

		const form = document.forms['loginForm'];
		const email = form['useremail']['value'];

		var uemail = document.getElementById('useremail').value
		
		// characters@characters.characters
		const regex_email = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/gm;

		if(regex_email.test(uemail)){
			document.getElementById("email-div").style.cssText = 'border-style: solid; border-color: green; padding: 5px';
			return true;
		}
		
		else{
			document.getElementById("email-div").style.cssText = 'border-style: solid; border-color: red; padding: 5px';
		
			return false;
		}
	}

	function validatePass(){

		const form = document.forms['loginForm'];
		const password = form['upassword']['value'];
		
		// Password must have at least 8 characters, at least one uppercase, one lowercase, one number and special characters
		const regex_pass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/gm;
		
		if(regex_pass.test(password)){
			document.getElementById("pass-div").style.cssText = 'border-style: solid;border-color: green;padding: 5px';
			return true;
		}
		else{
			document.getElementById("pass-div").style.cssText = 'border-style: solid;border-color: red;padding: 5px';
		
			return false;
		}
	}

</script> 

</html>