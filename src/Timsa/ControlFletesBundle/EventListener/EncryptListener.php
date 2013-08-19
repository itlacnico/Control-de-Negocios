<?php

class EncryptListener{

	public function onUserRegister(EcryptEvent $e){
		error_log("¡Se registro evento!", 0);
	}
}