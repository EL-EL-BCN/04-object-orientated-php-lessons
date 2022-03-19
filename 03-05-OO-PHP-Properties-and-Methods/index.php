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
		<br>
		<br>
		<?php
			$Candidate01 = new Candidate();
			$Candidate01->SetCandidateFirstName("John");
			echo $Candidate01->CandidateFirstName;

			$Candidate02 = new Candidate();
			$Candidate02->SetCandidateFirstName("Joseph");
			echo $Candidate02->CandidateFirstName;

		?>



	</body>
</html>