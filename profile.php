<?php 
session_start();
if (!isset($_SESSION['studid'])) {
	require('session.php');
}
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Welcomepage</title>
 </head>
 <body>
 	<h1>Wellcome!</h1>
 	<?php 
 	$name=$_SESSION['studname'];
 	echo $name;
 	 ?>
 	 <br>
 	 <a href="logout.php">Logout
 	 </a>
 </body>
 </html>