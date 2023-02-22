<!DOCTYPE html>
<html>

<head>
	<title>Aflamk</title>
	<meta charset="UFT-8">
	<meta name="keywords" content="Text,Website">
	<meta name="description" content="Text Website">
	<meta name="viewport" content="width=device-width, initial-scale:1.0">
	<link rel="stylesheet" href="Styles/SignUpCSS.css">
	<script src="Script/ScriptofSignUp.js"> </script>
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
		<form onsubmit="return validation()" method="post" name="signUpValid">
			<label><b>First Name:</b></label>
			<input id="user" name="firstName" placeholder="Your First Name" autofocus /><br/>
			<label><b>Last Name:</b></label>
			<input id="user" name="lastName" placeholder="Your Last Name" autofocus /><br/>
			<label><b>Email:</b></label>
			<input id="text" name="email" placeholder="email@example.com" autofocus /></br>
			<label><b>Password:</b></label>
			<input id="password" type="password" name="password" placeholder="Your Password" autofocus /><br/>
			<input type="radio" name="gender"/><b>Male</b>
			<input type="radio" name="gender"/><b>Female</b><br/>
			<button id="button" onclick="register();">Sign Up</button>
			<input id="button" type="reset" value="Clear" onclick="clear2();" />
			<button id="button1"><a href="Login.php">I already have an account</a></button>
		</form>

		<div id="footer">&copy; Aflamk - <a href="ContactUs.php">Contact Us</a> - <a href="About.php">DMCA</a> - <a href="Login.php">Login</a> - <a href="SignUp.php">Sign Up</a></div>
	</body>

</html>
