<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<style type="text/css">
		label{
			font-size: 20px;		
		}
	</style>
</head>
<body style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url('image/rom.jpg');background-repeat: no-repeat;background-size: cover;">
	<center>
		<div style="width: 50%;background-color: rgba(0,0,0,0.5); padding-left: 0px;">
			<fieldset>
				<legend style="color: purple;font-family: cursive;">Register Form</legend>
				<caption>Form Demo</caption>
				<br><hr><br>
				<form action="login.php" method="post">
					<label>Enter Name</label>
					<input type="text" name="name" placeholder="Enter Name" id="txt1" required>
					<br/><br>
					<label>Enter Address</label>
					<br>
					<textarea name="Address" id="txt2" rows="4" cols="30" placeholder="Address"></textarea>
					<br></br>
					<label>Gender</label>
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
					<br><br>
					<!-- <label>Select Course</label>
					<input type="checkbox" name="course1" value="HTML/CSS/JS">HTML/CSS/JS
					<input type="checkbox" name="course2" value="PHP/MySQL">PHP/MySQL
					<input type="checkbox" name="course3" value="Angularjs">Angularjs
					<input type="checkbox" name="course4" value="JQuery">JQuery
					<br><br> -->
					<label>Select Branch</label>
					<select name="Branch" required>
						<option value="selected disaled">--Select Branch--</option> <!-- for disable perticular element -->						
						<option value="CS">Computer</option>
						<option value="Mechanical">Mechanical</option>
						<option value="Civil">Civil</option>
						<option value="Electronics">Electronics</option>
					</select>
					<br><br>
					<label>Enter Contact No.</label>
					<input type="text" name="contactno" pattern="[0-9]{10}" title="Enter 10 digits" id="txt3" placeholder="Contact No." minlength="10" maxlength="10" required>
					<br><br>
					<label>Enter Email Id</label>
					<input type="email" value="example@example.com" name="email" id="txt4" placeholder="Email" required>
					<br><br>
					<label>Enter Username</label>
					<input type="text" name="username" placeholder="Username" required>
					<br><br>
					<label>Enter Password</label>
					<input type="Password" name="Password" required>
					<br><br>
					<input type="date" name="dos" min="1990-01-01" max="2000-12-31">
					<br><br>
					<input type="submit" name="submit" value="Save" style="background-color: blue;border:none;color: #ffff;">
					<!-- <input type="reset" name="reset" value="Reset" style="background-color: red;border:none;color: #ffff;"> -->
				</form>
			</fieldset>
		</div>
	</center>
</body>
</html>