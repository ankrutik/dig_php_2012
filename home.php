<?php
	include("connection.php");

?>

<html>
<head>
	<link rel="stylesheet" href="css/dig.css">
</head>
<body>
	<div class="navi">
	<ul >
		<li><a href="www.google.com">Home</a></li>
		<li><a href="www.google.com">Products</a></li>
		<li><a href="www.google.com">About Us</a></li>
		<li><a href="www.google.com">Contact Us</a></li>
		<li>
			<?php 
				if(isset($_SESSION['user_id']))
				{echo '<a href="logout.php">Log Out</a>';}
				else
				{echo '<a href="login.php">Log In</a>';}
			?>
		</li>
	</ul>
	</div>

	<div id="banner">

	</div>

	<div id="categories">
		<div id="cat_sqr"><img src='img/cat1.jpg'/></div>
		<div id="cat_sqr"><img src='img/cat1.jpg'/></div>
		<div id="cat_sqr"><img src='img/cat1.jpg'/></div>
		<div id="cat_sqr"><img src='img/cat1.jpg'/></div>
	</div>
</body>
<html>