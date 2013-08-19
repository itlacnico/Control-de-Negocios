<?php

class EncryptEvent extends Event{

	protected $user;

	public function __construct(User $user){
		$this->user = $user;
	}

	public function getUser(){
		return $this->user;
	}
}	