<!DOCTYPE html>
<html>

<head>
	<title>Aflamk</title>
	<meta charset="UFT-8">
	<meta name="keywords" content="Text,Website">
	<meta name="description" content="Text Website">
	<meta name="viewport" content="width=device-width, initial-scale:1.0">
	<link rel="stylesheet" href="Styles/LoginCSS.css">
	<script> 
		function login(){
			var email = document.loginForm.email.value;
			var password = document.loginForm.password.value;
			
			if(email == "admin@admin.com" && password == "admin"){
				window.location.href = "Aflamk.php";
			}
			else{
				alert("Wrong Login");
			}
		}
	</script>
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
		<form name="loginForm">
			<label><b>Email:</b></label>
			<input id="text" name="email" placeholder="email@example.com" autofocus required/></br>
			<label><b>Password:</b></label>
			<input id="password" type="password" name="password" placeholder="Your Password" autofocus required/><br/>
			<label><input type="checkbox" checked="checked" name="remember"><em>Remember Me</em></label></br>
			<input type="button" id="button" value="Login" onclick="login()">
			<button id="button1"><a href="ResetPassword.php">Forgotten Password?</button></a>
			<hr/>
			<button id="button1"><a href="SignUp.php">Create New Account</button></a>
		</form>		
		
		<div id="footer">&copy; Aflamk - <a href="ContactUs.php">Contact Us</a> - <a href="About.php">DMCA</a> - <a href="Login.php">Login</a> - <a href="SignUp.php">Sign Up</a></div>
	</body>
	
</html>