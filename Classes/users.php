<?php

class Users{
	private $user_id;
	private $user_firstname;
	private $user_lastname;
	private $user_nickname;
	private $user_password;
	private $user_email;
	private $user_gender;
	private $user_birthdate;
	private $user_status; 
	private $user_about; 
	private $user_hometown;
	
	public function _construct($user_firstname, $user_lastname, $user_nickname, $user_password, $user_email, $user_gender, $user_birthdate, $user_status, $user_about, $user_hometown){	
		$this->user_id				=$user_id		;
		$this->user_firstname		=$user_firstname;
		$this->user_lastname		=$$user_lastname;
		$this->user_nickname		=$user_nickname	;
		$this->user_password		=$user_password	;
		$this->user_email			=$user_email	;
		$this->user_gender			=$user_gender	;
		$this->user_birthdate		=$user_birthdate;
		$this->user_status			=$user_status	;
		$this->user_about			=$user_about	;
		$this->user_hometown		=$user_hometown	;
	}
		public function _construct($user_id, $user_firstname, $user_lastname, $user_nickname, $user_password, $user_email, $user_gender, $user_birthdate, $user_status, $user_about, $user_hometown){	
		$this->user_id				=$user_id		;
		$this->user_firstname		=$user_firstname;
		$this->user_lastname		=$$user_lastname;
		$this->user_nickname		=$user_nickname	;
		$this->user_password		=$user_password	;
		$this->user_email			=$user_email	;
		$this->user_gender			=$user_gender	;
		$this->user_birthdate		=$user_birthdate;
		$this->user_status			=$user_status	;
		$this->user_about			=$user_about	;
		$this->user_hometown		=$user_hometown	;
	}
	
	public function getUser_id(){	
		return $this->user_id	;
	}
	public function setUser_id($user_id){	
		$this->user_id		=$user_id	;
	}
	
	public function getUser_firstname(){	
		return $this->user_firstname	;
	}
	public function setUser_firstname($user_firstname){	
		$this->user_firstname		=$user_firstname	;
	}
	
	public function getUser_lastname(){	
		return $this->user_lastname	;
	}
	public function setUser_lastname($user_lastname){	
		$this->user_lastname		=$user_lastname	;
	}
	
	public function getUser_nickname(){	
		return $this->user_nickname	;
	}
	public function setUser_nickname($user_nickname){	
		$this->user_nickname		=$user_nickname	;
	}
	
	public function getUser_password(){	
		return $this->user_password	;
	}
	public function setUser_password($user_password){	
		$this->user_password		=$user_password	;
	}
	
	
	public function getUser_email(){	
		return $this->user_email	;
	}
	public function setUser_email($user_email){	
		$this->user_email		=$user_email	;
	}
	
	public function getUser_gender(){	
		return $this->user_gender	;
	}
	public function setUser_gender($user_gender){	
		$this->user_gender		=$user_gender	;
	}
	
	
	public function getUser_birthdate(){	
		return $this->user_birthdate	;
	}
	public function setUser_birthdate($user_birthdate){	
		$this->user_birthdate		=$user_birthdate	;
	}
	
	public function getUser_status(){	
		return $this->user_status	;
	}
	public function setUser_status($user_status){	
		$this->user_status		=$user_status	;
	}
	
	
	public function getUser_about(){	
		return $this->user_about	;
	}
	public function setUser_about($user_about){	
		$this->user_about	=$user_about	;
	}
	
	public function getUser_hometown(){	
		return $this->user_hometown	;
	}
	public function setUser_hometown($user_hometown){	
		$this->user_hometown		=$user_hometown	;
	}
	
	
}

?>