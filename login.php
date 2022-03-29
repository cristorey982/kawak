<?php
error_reporting(E_ERROR);
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
//print_r($_POST);

// login Demo y password 20223
$dbusername="kawak";
$dbpassword="20223";

if($username==$dbusername&&$password==$dbpassword)
	{	
	echo '<script type="text/javascript">
				window.location.assign("v_documento.php");
		</script>';
}else{
		echo "<center><br><br><br><h1>Este login o password no existe!<br></h1>
				<img src='img/monigote-bad.jpg' width='200' height='200'><br>
				<a href='index.php'><img src='img/return.gif' width='50' height='50' alt='Return'></a>
			</center>";

	}
?>