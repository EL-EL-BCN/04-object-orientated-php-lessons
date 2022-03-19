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
	$person1 = new Person();
	
	try {
		$person1 = setName("Daniel");
		echo $person1->getName();
	} catch (TypeError $e) {   		
		echo "Error!: " . $e->getMessage();
	}
	
?>
</body>
</html>