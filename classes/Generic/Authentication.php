<?php
namespace Generic;

class Authentication {
	private $users;
	private $emailColumn;
	private $passwordColumn;

	public function __construct(DatabaseTable $users, $emailColumn, $passwordColumn) {
		session_start();
		$this->users = $users;
		$this->emailColumn = $emailColumn;
		$this->passwordColumn = $passwordColumn;
	}

	public function login($email, $password) {
		$user = $this->users->find($this->emailColumn, strtolower($email));

		if (!empty($user) && password_verify($password, $user[0]->{$this->passwordColumn}) ) {
			session_regenerate_id();
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $user[0]->{$this->passwordColumn};
			return true;
		}
		else {
			return false;
		}
	}

	public function isLoggedIn() {
		if (empty($_SESSION['email'])) {
			return false;
		}
		
		$user = $this->users->find($this->emailColumn, strtolower($_SESSION['email']));

		if (!empty($user) && $user[0]->{$this->passwordColumn} === $_SESSION['password']) {
			return true;
		}
		else {
			return false;
		}
	}
	
	public function getUser() {
		if ($this->isLoggedIn()) {
			return $this->users->find($this->usernameColumn, strtolower($_SESSION['username']))[0];
		}
		else {
			return false;
		}
	}
}