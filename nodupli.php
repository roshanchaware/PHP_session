<?php 
extract($_GET);
if (isset($save)) {
	$connect=mysqli_connect("localhost","root","","demodb");

	$sql="SELECT * from student";

	$result=mysqli_query($connect,$sql);

	//$status=0;

	while ($row=$result->fetch_array()) {
		$email=$row['email'];
		if ($email==$em) {
			$status=1;
			break;
		}
		if ($email!=$em) {
			$status=0;
		}
	}
	if ($status==0) {
		$sql1="INSERT into student(email) values ('em')";

		$result1=mysqli_query($connect,$sql);
		if ($result1) {
			echo "<script>
			alert('Inserted Successfully....')
			window.location.href='noduplication.php'
			</script>";
		}
	}
	else if ($status==1) {
		echo "<script>
		alert('Please try another email id...')
		window.location.href='noduplication.php'
		</script>";
	}
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>No duplication</title>
 </head>
 <body>
 	<form action="" method="get">
 		<input type="email" name="em" placeholder="Email"><br>
 		<input type="submit" name="save">
 	</form>
 </body>
 </html>