<?php
	include("connection.php");
	ini_set('display_errors','0');
		
	if(isset($_POST['id'])&&isset($_POST['pass']))
	{
		$quer='select * from user_master where uid="'.$_POST['id'].'" AND password=AES_ENCRYPT("abc","'.$_POST['pass'].'");';
		$result=mysql_query($quer) or die(mysql_error());
		$res=mysql_fetch_object($result);
		echo $res->UID;

		if($res->UID==$_POST['id'])
		{
			$_SESSION['uid']=$res->UID;
			echo '<script type="text/javascript">window.location="products.php"</script>';
		}
		else
		{
			echo "invalid";
		}
	}
	else
	{
		echo "not set";
	}
	
?>

