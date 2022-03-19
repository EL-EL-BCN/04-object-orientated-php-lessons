<?php
	include 'includes/person.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
			$pet01 = new Person();

			echo $pet01->owner();
		?>
	<br>
	<br>
		<?php
			$mascot01 = new Mascot();

			echo $mascot01->guardian();
		?>





	</body>
</html>