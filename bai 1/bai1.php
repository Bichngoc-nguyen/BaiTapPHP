<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body {
		width: 20%;
		margin: auto;
	}
	.error{
		color: red;
	}
	.date{
		border: 1px red solid;
	}
</style>
<body>
	<!-- xử lý lệnh -->
	<?php 

	$_SESSION['nameErr']='';
	$_SESSION['emailErr']=
	$_SESSION['phoneErr']='';
	$_SESSION['passwordErr']='';
	$_SESSION['birthErr']='';
	$_SESSION['passErr']='';
	if (isset($_POST['uname']) && isset($_POST['email']) &&  isset($_POST['password']) &&  isset($_POST['phone']) &&isset($_POST['gender'])&& isset($_POST['day'])&& isset($_POST['month'])&& isset($_POST['year'])) {
		$_SESSION['name'] = $_POST['uname'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['password'] = $_POST['password'];
		$_SESSION['gender']= $_POST['gender'];
		$_SESSION['day'] = $_POST['day'];
		$_SESSION['month'] = $_POST['month'];
		$_SESSION['year'] = $_POST['year'];
		$_SESSION['phone'] = $_POST['phone'];

			// username
		if (empty($_SESSION['name']) && $_SESSION['name'] == "") {
			$_SESSION['nameErr'] = "Name is require";
		}

			// email
		if (empty($_SESSION['email']) && $_SESSION['email'] == "") {
			$_SESSION['emailErr'] = "Email is require";
		}elseif(!preg_match('/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i', $_SESSION['email'])){
			$_SESSION['emailErr'] = "email not right";
		}

			// password
		if (empty($_SESSION['password']) && $_SESSION['password'] == "") {
			$_SESSION['passwordErr'] = "password is require";
		}

		// password
		if (empty($_SESSION['phone']) && $_SESSION['phone'] == "" ) {
			$_SESSION['phoneErr'] = "phone is require";
		}elseif (!preg_match('/^[0-9]{10}+$/',$_SESSION['phone'])) {
			$_SESSION['phoneErr'] = "phone is 10 number not char";
		}

	}
	?>
	<form action="bai1.php" method="post">
		<h3>Form Register</h3>
		<label>UserName: </label> 
		<span class="error">*<?php echo $_SESSION['nameErr']; ?></span>
		<input type="text" class="form-control" name="uname" value=""> <br> 
		<label>Email: </label>
		<span class="error">*<?php echo $_SESSION['emailErr']; ?></span>
		<input type="text" class="form-control" name="email" value=""> <br> 
		<label>Password:</label>
		<span class="error">*<?php echo $_SESSION['passwordErr']; ?></span>
		<input type="password" class="form-control" name="password"> <br>
		<label>Gender: </label>
		<select name="gender" id="">
			<option value="other">Other</option>
			<option value="male">Male</option>	
			<option value="female">Female</option>		
		</select> <br>
		
		<label>Birthday:</label>
		<select name="day">
			<option disabled>Day</option>
			<?php 
			$day = 1;
			for ($day=1; $day <= 31; $day++) { 
				echo "<option>";
				echo $day;
				echo "</option>";
			}
			?>
		</select>
		<select name="month">
			<option disabled>Month</option>
			<?php 
			$month = 1;
			for ($month=1; $month <= 12; $month++) { 
				echo "<option>";
				echo $month;
				echo "</option>";
			}
			?>
		</select>
		<select name="year">
			<option disabled>year</option>
			<?php 
			$year = 1990;
			for ($year=1990; $year <= 2021; $year++) { 
				echo "<option>";
				echo $year;
				echo "</option>";
			}
			?>
		</select>
		<label>Telephone: </label>
		<span class="error">*<?php echo $_SESSION['phoneErr']; ?></span>
		<input type="text" class="form-control" name="phone"><br>

		<input type="submit" class="form-control" name="submit" value="Submit" onclick="return confirm('Bạn chắc chắn muốn đăng kí?')">
	</form>
	
</body>
</html>