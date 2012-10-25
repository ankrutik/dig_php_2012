<?php
	include("connection.php");

?>

<html>
<head>
	<link rel="stylesheet" href="css/dig.css"></link>

	<script type="text/javascript" language="javascript">
	function logredirect()
	{
		if(document.getElementById("id").value==""||document.getElementById("pass").value=="")
		{
			alert("wtf?");
		}
		else
		{
			document.getElementById("login_form").submit();
		}
	}
	</script>
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

	<div id="login_content">
		<form id="login_form" method="post" action="logincheck.php">
			<label for="id">User Id</label>
			<input id="id" name="id" type="textbox"/>
			<br/>
			<label for="pass">Password</label>
			<input id="pass" name="pass" type="password"/>
			</br>
			<input type="button" onClick="logredirect();" value="Log in"/>
		</form>
	<div>
</body>
<html>