<?php

class UserModel {

	private $username;

	function UserModel ($username) {
		$this->username = $username;
	}

	function set_username($username) {
		$this->username = $username;
	}
}
?>