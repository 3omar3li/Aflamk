<!DOCTYPE html>
<html>

<head>
	<title>Aflamk</title>
	<meta charset="UFT-8">
	<meta name="keywords" content="Text,Website">
	<meta name="description" content="Text Website">
	<meta name="viewport" content="width=device-width, initial-scale:1.0">
	<link rel="stylesheet" href="Styles/ContactUsCSS.css">
	<script> </script>
</head>

<body>
	<div id="header">AFLAMK</div>
	<div id="menu">
		<ul>
			<li><a href="Aflamk.php">Home</a></li>
			<li><a href="Movies.php">Movies</a></li>
			<li><a href="Series.php">Series</a></li>
			<li><a href="Login.php">Login</a></li>
			<li><a href="SignUp.php">Sign Up</a></li>
			<li><a href="ContactUs.php">Contact Us</a></li>
			<li><a href="About.php">About Us</a></li>
			<li><input name="searchitem" type="search" placeholder="Search"/></li>
		</ul>
	</div>
	<form>
			<label>Your Name:</label>
			<input class="user" name="yourname" placeholder="Your Name" autofocus required/><br/>
			<label>Your Email:</label>
			<input id="text" name="email" placeholder="email@example.com" autofocus required/></br>
			<label>Subject:</label>
			<input class="user" name="subject" autofocus required/><br/>
			<label>Your Message:</label> <br>
			<textarea name="about" class="user"></textarea> <br><br>
			<button id="button">Send</button>
		</form>



		<div id="footer">&copy; Aflamk - <a href="ContactUs.php">Contact Us</a> - <a href="About.php">DMCA</a> - <a href="Login.php">Login</a> - <a href="SignUp.php">Sign Up</a></div>
	</body>

</html>
