<?php
	include 'includes/autoloader.inc.php'
?>
<DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
	$person1 = new Person("Daniel", "28");
	echo $person1->getPerson();

	echo"<br><br>";

	$house1 = new House("John doe Road", "12");
      echo $house1->getAddress();
?>
</body>
</html>