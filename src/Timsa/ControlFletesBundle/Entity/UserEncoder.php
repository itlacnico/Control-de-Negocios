<?php

namespace Timsa\ControlFletesBundle\Entity;
 
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
 
class UserEncoder implements PasswordEncoderInterface {

		public function encodePassword($raw, $salt){
		       return hash('sha1', $salt . raw); // Custom function for encrypt
		}

	   public function isPasswordValid($encoded, $raw, $salt){
		       return $encoded === $this->encodePassword($raw, $salt);
		}
}