	<?php
	session_start();
	if (isset($_SESSION['userType']) != 1) {
			header("Location: logIn.php");
			exit();
		}

	include_once("connection.php");

	$sql = "SELECT * FROM users WHERE typeIndex = 4";
	$pending_contentCreators = $conn->query($sql);

	?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="styles/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<title>Recipe Approval</title>

<body style="background-color: floralwhite;">

				<h2 style="text-shadow:2px 2px dimgray;">
				Content Creator Approval
			</h2>

		<nav class="recipenav">
			
			<div class="nav-links">
				<ul style="text-align: left;">
					<li><a href="adminIndex.php">Home</a></li>
					<li><a href="recipeForm.php">Recipe Form</a></li>
					<li><a href="recipeApprov.php">Recipe Approval</a></li>
					<li><a href="logout.php">Log Out</a></li>
				</ul>

			</div>
		</nav>



		<?php
			while ($row = mysqli_fetch_assoc($pending_contentCreators)){
				$user_email = $row['userEmail'];
				$user_firstName = $row['fname'];
				$user_lastName = $row['lname'];
				$user_type = $row['typeIndex'];
				$user_Id = $row['userIndex'];

				echo "
				<div class='approval' id='approv1'>
					<p>Name: $user_firstName $user_lastName</p> 
					<p>Email: $user_email</p>

					<button class='approve btn' onclick='op1()'>Approve</button><button class='deny btn' onclick='op1()'>Deny</button>

					<div class='confirmPopup' id='pop1'>
						<h3>You Sure?</h3>
						<button onclick='cl1()'>Confirm</button>
					</div>

				</div>
				";
			}
		?>

<!-- <div class="approval" id="approv1">
	<p>Name: Deldk the donnny don</p> <p>Email: delasi@yahoo.com</p>

<button class="approve btn" onclick="op1()">Approve</button><button class="deny btn" onclick="op1()">Deny</button>

<div class="confirmPopup" id="pop1"><h3>You Sure?</h3>
	<button onclick="cl1()">Confirm</button>
</div>

</div>

<div class="approval" id="approv2">
	<p>Name: Nadine Nadone</p> <p>Email: nadiyahyah@yahoo.com</p>

<button class="approve btn" onclick="op2()">Approve</button><button class="deny btn" onclick="op2()">Deny</button>

<div class="confirmPopup" id="pop2"><h3>You Sure?</h3>
	<button onclick="cl2()">Confirm</button>
</div>


</div>
<div class="approval" id="approv3">
	<p>Name: Ann Vann Kablam</p> <p>Email: lilAnnieVannie@gmail.com</p>

<button class="approve btn" onclick="op3()">Approve</button><button class="deny btn" onclick="op3()">Deny</button>

<div class="confirmPopup" id="pop3"><h2>You Sure?</h2>
	<button onclick="cl3()">Confirm</button>
</div>


</div> -->



</body>
<script type="text/javascript">
	let popup1 = document.getElementById('pop1');
	// let popup2 = document.getElementById('pop2');
	// let popup3 = document.getElementById('pop3');
	let approv1 = document.getElementById('approv1');
	// let approv2 = document.getElementById('approv2');
	// let approv3 = document.getElementById('approv3');

	function op1(){
		popup1.classList.add("openPopUp");
		// document.getElementById("pop1").style.visibility = "visible";
		console.log("I am working ");
	}
	function cl1(){
		popup1.classList.remove("openPopUp");
		approv1.innerHTML= "";
		approv1.style.backgroundColor = "gray";
		approv1.style.border = "thick dashed white";
		console.log("I am also working");

	} 
 
	// function op2(){
	// 	popup2.classList.add("openPopUp");
	// }
	// 	function cl2(){
	// 	popup2.classList.remove("openPopUp");
	// 	approv2.innerHTML= ""
	// 	approv2.style.backgroundColor = "gray";
	// 	approv2.style.border = "thick dashed white";
	// } 

	// function op3(){
	// 	popup3.classList.add("openPopUp");
	// }
	// 	function cl3(){
	// 	popup3.classList.remove("openPopUp");
	// 	approv3.innerHTML= "";
	// 	approv3.style.backgroundColor = "gray";
	// 	approv3.style.border = "thick dashed white";
	// } 



</script>

</html>