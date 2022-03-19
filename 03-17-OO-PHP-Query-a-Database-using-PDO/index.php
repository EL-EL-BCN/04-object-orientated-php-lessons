<?php
	include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale 1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Document</title>
</head>
<body>
<?php

	$testobj = new Test();
	$testobj->getUsers();

	$testobj2 = new Test();
	$testobj2->getUsersStmt("Elliott", "Farmer");

	$testobj3 = new Test();
	$testobj3->setUsersStmt("Jacob", "Son of Joseph", "Jsonofjoseph@godmail.com", "JSOJ", "password")

?>
</body>
</html>