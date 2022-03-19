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
			echo Person::$drinkingAge; //Use colon colon to access static properties//

			Person::setDrinkingAge(18);
			echo Person::$drinkingAge;
		?>
		<br>
		<br>
		<?php
			$person1 = new Person("Daniel", "BLUE", "28");
			echo $person1->getDA();
		?>
	</body>
</html>