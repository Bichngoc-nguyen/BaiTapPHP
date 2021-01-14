<?php 
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<p>
		<?php 
		if (isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['phone'])  && isset($_SESSION['gender']) && isset($_SESSION['day']) && isset($_SESSION['month']) && isset($_SESSION['year'])) {

			echo  "Your name is:".$_SESSION['name']."<br>";
			echo  "Your email is:".$_SESSION['email']."<br>";
			echo  "Your phone is:".$_SESSION['phone']."<br>";
			if (isset($_SESSION['gender'])  && $_SESSION['gender'] == 'male') {
				echo 'Hello ông'."<br>";
			} elseif (isset($_SESSION['gender']) && $_SESSION['gender']== 'female') {
				echo  'Hello bà'."<br>";
			}	
			else{
				echo  'Hello ông/bà'."<br>";
			}				
			echo "Your birthday is:".$_SESSION['day']."/".$_SESSION['month']."/".$_SESSION['year'];
		}
		?>
	</p>
</body>
</html>
