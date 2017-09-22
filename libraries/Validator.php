<?php
class Validator{
	
	public function isRequired($fields_array){
		foreach($fields_array as  $field){

			if($_POST[''.$field.''] == ''){
				return false;
			}
		}
		return true;
	} 

	// Validate email

	public function isValidEmail($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			return true;
		} else {
			return false;
		}
	}

	//CHECK password field
	public function passwordMatch($pwd1, $pwd2){
		if($pwd1 == $pwd2){
			return true;
		} else {
			return false;
		}
	}
}
?>