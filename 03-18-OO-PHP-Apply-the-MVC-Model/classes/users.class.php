<?php

class Users extends Dbh {

	protected function GetUsers($name) {
		$sql = "SELECT * FROM users WHERE user_first = ?";
		$stmt = $this->ConnectToDb()->prepare($sql);
		$stmt->execute([$name]);

		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $results;
	}

	protected function SetUsers($user_first, $user_last, $user_email, $user_uid, $user_pwd) {
		$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?)";
		$stmt = $this->ConnectToDb()->prepare($sql);
		$stmt->execute([$user_first, $user_last, $user_email, $user_uid, $user_pwd]);
	}


}