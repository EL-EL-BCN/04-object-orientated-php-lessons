<?php

class Test extends Dbh {

	public function getUsers() {
		$sql = "SELECT * FROM users";
		$stmt = $this->ConnectToDb()->query($sql);
		while($row = $stmt->fetch()) {
			echo $row['user_first']  . '<br>';
		}
	}

	public function getUsersStmt($user_first, $user_last) {
		$sql = "SELECT * FROM users WHERE user_first = ? AND user_last = ?";
		$stmt = $this->ConnectToDb()->prepare($sql);
		$stmt->execute([$user_first, $user_last]);
		$names = $stmt->fetchALL(PDO::FETCH_ASSOC);

		foreach ($names as $name) {
			echo $name['user_first'] . '<br>';
		}
	}

public function setUsersStmt($user_first, $user_last, $user_email, $user_uid, $user_pwd) {
		$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?)";
		$stmt = $this->ConnectToDb()->prepare($sql);
		$stmt->execute([$user_first, $user_last, $user_email, $user_uid, $user_pwd]);
	}
	
}