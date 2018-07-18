<?php

class UserController {

	function UserController()
	{

	}

	function create($username,$password)
	{

	}

	function login($username,$password)
	{
		if($this->authenticate($username,$password)) {
			session_start();
			$user = new UserModel($username);
			$SESSION['user'] = $user;
			return true;
		} else {
			return false;
		}
	}

	static function authenticate($u,$p) {
		if($u == 'fris' && $p == '1234') $authentic=true;
		return $authentic;
	}

	function logout()
	{
		session_start();
		session_destroy();
	}
}