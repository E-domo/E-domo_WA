<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="styles/style.css">
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
					<li><a href="adminIndex.php" style="color: dimgray; text-shadow:0px 0px dimgray;">Admin Home</a></li>
					<li><a href="index.php" style="color: dimgray; text-shadow:0px 0px dimgray;">Logout</a></li>
				</ul>

			</div>
		</nav>




<div class="recipe" style="background-color:ghostwhite;" id="recipe1">
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
	<p>read more</p><button class="approve btn" onclick="op1()">Approve</button><button class="deny btn" onclick="op1()">Deny</button>

<div class="confirmPopup" id="pop1"><h3>You Sure?</h3>
	<button onclick="cl1()">Confirm</button>
</div>

</div>
<div class="recipe" style="background-color:antiquewhite;" id="recipe2">

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
	<p><b>Made Like:</b>User557</p>

	<p>read more</p><button class="approve btn" onclick="op2()">Approve</button><button class="deny btn" onclick="op2()">Deny</button>
	<div class="confirmPopup" id="pop2"><h3>You Sure?</h3>
	<button onclick="cl2()">Confirm</button>
</div>
	</div>

	<div class="recipe" style="background-color:ghostwhite;" id="recipe3">
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
	<p>read more</p><button class="approve btn" onclick="op3()">Approve</button><button class="deny btn" onclick="op3()">Deny</button>
	<div class="confirmPopup" id="pop3"><h3>You Sure?</h3>
	<button onclick="cl3()">Confirm</button>
</div>


</div>

<div class="recipe" style="background-color:antiquewhite;" id="recipe4">

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
	<p>read more</p><button class="approve btn" onclick="op3()">Approve</button><button class="deny btn" onclick="op1()">Deny</button>
	<div class="confirmPopup" id="pop4"><h3>You Sure?</h3>
	<button onclick="cl4()">Confirm</button>
</div>
	</div>


<a href="recipeForm.php" class="adminbutton" style="display:none;">secret button</a>

</body>

<script type="text/javascript">
	let popup1 = document.getElementById('pop1');
	let popup2 = document.getElementById('pop2');
	let popup3 = document.getElementById('pop3');
	let popup4 = document.getElementById('pop4');
	let recipe1 = document.getElementById('recipe1');
	let recipe2 = document.getElementById('recipe2');
	let recipe3 = document.getElementById('recipe3');
	let recipe4 = document.getElementById('recipe4');


	function op1(){
		popup1.classList.add("openPopUp")
	}
	function op2(){
		popup2.classList.add("openPopUp")
	}
	function op3(){
		popup3.classList.add("openPopUp")
	}
	function op4(){
		popup4.classList.add("openPopUp")
	}

	function cl1(){
		pop1.classList.add("openPopUp")
		recipe1.innerHTML= ""
		recipe1.style.backgroundColor = "gray"
		recipe1.style.border = "thick dashed white";

	} 

	function cl2(){
		pop2.classList.add("openPopUp")
		recipe2.innerHTML= ""
		recipe2.style.backgroundColor = "gray"
		recipe2.style.border = "thick dashed white";

	} 

	function cl3(){
		pop3.classList.add("openPopUp")
		recipe3.innerHTML= ""
		recipe3.style.backgroundColor = "gray"
		recipe3.style.border = "thick dashed white";

	} 

	function cl4(){
		pop4.classList.add("openPopUp")
		recipe4.innerHTML= ""
		recipe4.style.backgroundColor = "gray"
		recipe4.style.border = "thick dashed white";

	} 


</script>

</html>