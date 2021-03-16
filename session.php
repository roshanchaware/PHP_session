<?php 
extract($_POST);

if ($uname==null) {
	echo "<script>
	alert('login first');
	window.location.href='login.php'
	</script>";
}
include('dbconnect.php');
if (isset($save)) {
	$sql="SELECT * from student where username='$uname' and password='$pass'";

	$result=mysqli_query($connect,$sql);

	while ($row=$result->fetch_assoc()) {
		$id=$row['id'];
		$name=$row['name'];

		$_SESSION['studid']=$id;
		$_SESSION['studname']=$name;
		$_SESSION['uname']=$username;
		$_SESSION['pass']=$password;
	}
}
if (!isset($_SESSION['studid'])) {
	echo "You are not logged in.";
	echo "<a href='login.php'>Click!</a>";
}
 ?>