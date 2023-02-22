<!DOCTYPE html>
<html>

<head>
	<title>Aflamk</title>
	<meta charset="UFT-8">
	<meta name="keywords" content="Text,Website">
	<meta name="description" content="Text Website">
	<meta name="viewport" content="width=device-width, initial-scale:1.0">
	<link rel="stylesheet" href="Styles/WebsiteCSS.css">
	<script src="Script/HomeSlideShow.js"> </script>
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
	<div  id="slideshow-container">
		<div>
			<img id="slideshow" src="ImagesForTheSlideShow/1.jpg">
		</div>
		<a class="prev" onclick="prev()">&#10094;</a>
		<a class="next" onclick="next()">&#10095;</a>
	</div>
			<div class="row">
				<h1>Latest AFLAMK Torrents</h1>
			</div>
			<div class="row">
					<div class="column">
				<div class="card ">
					<a href="#"><figure><img title="Tenet" src="Images/tenet.jpg" class="imgs" width="210" height="315"></figure></a>
					<div class="movieLink">
					  <a href="#">Tenet</a>
				  </div>
				</div>
				<div class="card">
					<a href="#"><figure>
					<img title="Mission Impossible : Fallout" src="Images/missionimpossible.jpg" class="imgs"width="210" height="315"></figure></a>
					<div class="movieLink">
					  <a href="#">Mission Impossible: Fallout</a>
				  </div>
				</div>
				<div class="card">
					<a href="#"><figure><img title="Dark" src="Images/dark.png" class="imgs"width="210" height="315"></figure></a>
					<div class="movieLink">
					  <a href="#">Dark</a>
				  </div>
				</div>
			</div>
		</div>
    <div class="row">
			<div class="column">
				<h1>Popular Downloads</h1>
		<div class="card">
			<a href="#"><figure><img title="Friends" src="Images/friends.jpg" class="imgs"width="210" height="315"></figure></a>
			<div class="movieLink">
				<a href="#">Friends</a>
			</div>
		</div>
		<div class="card">
			<a href="#"><figure>
			<img title="harry potter" src="Images/harrypotter.jpg" class="imgs"width="210" height="315"></figure></a>
			<div class="movieLink">
				<a href="#">Harry Potter</a>
			</div>
		</div>
		<div class="card">
			<a href="#"><figure><img title="breakingbad" src="Images/breakingbad.jpg" class="imgs"width="210" height="315"></figure></a>
			<div class="movieLink">
				<a href="#">Breaking Bad</a>
			</div>
		</div>
	</div>
		</div>
	<div id="footer">
	&copy;Aflamk - <a href="ContactUs.php">Contact Us</a> - <a href="About.php">DMCA</a> - <a href="Login.php">Login</a> - <a href="SignUp.php">Sign Up</a>
	</div>
</body>

</html>
