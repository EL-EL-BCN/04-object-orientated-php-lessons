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

	$usersobj = new UsersView();
	$usersobj->ShowUser("Elliott");

	

	$usersobj3 = new UsersContr();
	$usersobj3->CreateUser("Jacob", "Son of Joseph", "Jsonofjoseph@godmail.com", "JSOJ", "password")
	
?>
</body>
</html>