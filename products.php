<?php
	include("connection.php");
	$quer='select * from products';
		
	if(isset($_GET['cat']))
	{
		$quer=$quer.' where category="'.$_GET['cat'].'"';
	}
	
	$result=mysql_query($quer) or die(mysql_error());
	echo $_SESSION['uid'];
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
	<div id="prodlabel">
		Products
	</div>
	<div id="content">
	<div id="side">
		<ul id="side_ul">
			<li><a href="products.php?cat=motherboard">Motherboards</a></li>
			<li><a href="www.google.com">Products</a></li>
			<li><a href="www.google.com">About Us</a></li>
			<li><a href="www.google.com">Contact Us</a></li>
		</ul>
	</div>
	<div id="categories">
	<?php
			while($resobj=mysql_fetch_object($result))
			{	
				$displaysqr='<div id="cat_sqr"><img src="';
				$displaysqr=$displaysqr.$resobj->img;
				$displaysqr=$displaysqr.'"/><div class="data">'.$resobj->name.'</div><div class="data">'.$resobj->price.'</div></div>';

				echo $displaysqr;
			}
	?>
	</div>
	</div>


</body>
<html>