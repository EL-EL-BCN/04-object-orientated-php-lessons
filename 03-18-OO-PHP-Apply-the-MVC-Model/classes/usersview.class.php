<?php

class UsersView extends Users {

	public function ShowUser($name) {
		$results = $this->GetUsers($name);
		echo "Full name: " . $results[0]['user_first'] . " " . $results[0]['user_last'] . "<br>";
		echo "Email: " . $results[0]['user_email'] . "<br><br>";
	}
}

