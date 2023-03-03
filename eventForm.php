
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Event Form</title>
</head>
<body>

<div class="Events_bg-image"></div>

<div class="bg-text">
	<h2 style="text-shadow: 2px 2px dimgray;">Event Form</h2>
	<div class="nav-links">
		<ul>
	<li><a href="adminIndex.php">Home</a></li>
	<li><a href="recipeForm.php">Recipe Form</a></li>
	
	<li><a href="logout.php">Log Out</a></li>

	</ul>
</div>
	<form id = "eventform" action="event_proc.php">

		<input type="text" id="rname" placeholder="Event Title" size="20" maxlength="45" required/><br>
		<input type="text" id="headline" placeholder="Headliner" size="20" maxlength="15" required/><br>


		<input type="text" id="rname" placeholder="Event Description" size="20" maxlength="300" required/><br>


		<input type="file" name="poster" accept="image/png, image/jpeg" id="myimg" style="display: none;"/>

       	<label for="myimg" style="border: 2px dashed #e3bc9a; border-radius: 5px; padding: 5px 10px 5px 10px; margin: 10px;" >Add Event Poster</label>
       		<br>
		<input type="submit" name="submitbuttn" style = "margin: 16px 0px 8px 0px;">


	</form>
	
</div>


</body>

</html>