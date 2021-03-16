<?php 
include('dbconnect.php');
	extract($_POST);
	if (isset($submit)) {

	$sql="SELECT * from student";

	$result=mysqli_query($connect,$sql);

	while ($row=$result->fetch_array()) {

		$usern=$row['username'];

		if ($usern==$username) {
			$status=1;
			break;
		}
		if ($usern!=$username) {
			$status=0;
		}
	}
	if ($status==0) {
		$sql1="INSERT INTO student(name,address,gender,branch,contactno,emailid,username,password)
	VALUES('$name','$Address','$gender','$Branch','$contactno','$email','$username','$Password')";

		$result1=mysqli_query($connect,$sql1);
		if ($result1) {
			echo "<script>
			alert('Inserted Successfully....')
			window.location.href='login.php'
			</script>";
		}
	}
	else if ($status==1) {
		echo "<script>
		alert('Please try another username...')
		window.location.href='form.php'
		</script>";
	}
	else{
		echo "<script>
		alert('Error....')
		window.location.href='form.php'";
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
</head>
<body>
	<center>
	<h1>Log in form!</h1>
	<form action="profile.php" method="post">
		User name : <input type="text" name="uname"><br><br>
		Password : <input type="Password" name="pass"><br><br>
		<input type="submit" name="save" value="Log in">
	</form>
	</center>
</body>
</html>