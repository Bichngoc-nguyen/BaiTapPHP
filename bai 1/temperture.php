
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<label>Temperature:</label>
		<input type="text" name="temperature">
		<input type="submit" name="submit" value="submit">
	</form>
	<?php 
		if (isset($_POST['temperature'])) {
			$temperature = $_POST['temperature'];

			if (0 <=$temperature && $temperature <=10) {
					echo "Temperture now: rét hại";
				}else if (11 <=$temperature && $temperature <= 15) {
					echo "Temperture now: Temperture now: rét";
				}else if (16 <=$temperature && $temperature <= 20) {
					echo "Temperture now: lạnh";
				}else if (21 <=$temperature && $temperature <= 25) {
					echo "Temperture now: mát";
				}else if (26 <=$temperature && $temperature <= 30) {
					echo "Temperture now: bình thường";
				}else{
					echo "Temperture now: nóng";
				}
		}

	 ?>
</body>
</html>
				