<?php

class UsersContr extends Users {
	
	public function CreateUser($user_first, $user_last, $user_email, $user_uid, $user_pwd) {
		$this->SetUsers($user_first, $user_last, $user_email, $user_uid, $user_pwd);
	}


}