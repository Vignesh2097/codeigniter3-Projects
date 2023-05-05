<?php
//It should not run without the basepath as of mentioned on config.php 
defined('BASEPATH') OR exit('No direct script access allowed');
class PasswordController extends CI_Controller{
	
	public function index(){
		//The rules for all the parameters are given in an array format by declaring a variable rules
		$rules=array(
		              [
					  'field'=>'email',
					  'label'=>'Email',
					  'rules'=>'required',
					  ],
					  [
					  'field'=>'new_password',
					  'label'=>'Password',
					  'rules'=>'callback_valid_password',//It calls the function valid_password here
					  ],
					  [
					  'field'=>'confirm_password',
					  'label'=>'Confirm_Password',
					  'rules'=>'matches[new_password]',//It should match the main password 
					  ],
			
			);
			//The rules are being set for the above input parameters 
			$this->form_validation->set_rules($rules);
			
			
			if($this->form_validation->run()==FALSE)
			//If the above code returns false, then one or more set rules have failed. If it returns true, then the validation rules have all passed
			{
				//proceed with further action
				$this->load->view('PasswordValidation');
			}
			else{
				
				$this->session->set_flashdata('success','Congrates');
				
				redirect(base_url('PasswordController/index'));
			}
	}
	
	public function valid_password($password=''){
		
		//Declaring a variable and using trim function inorder to remove whitespaces in password
		$password=trim($password);
		
		//Giving the main rules for the password
		$regex_lowercase = '/[a-z]/';//one lowercase letter
		$regex_uppercase = '/[A-Z]/';//one uppercase letter
		$regex_number = '/[0-9]/';//one number
		$regex_special = '/[!@#$%^&*()\-_=+{};:,<.>ยง~]/';//one special character
		
		if(empty($password)){
			//If the password is empty the following message is to be shown as an indication
			$this->form_validation->set_message('valid_password', 'The {field} field is required.');
			return FALSE;
		}	
		//If the password does not contain atleast a lower case letter the message is to be shown as an indication and returns false
		if(preg_match_all($regex_lowercase, $password) < 1){
			$this->form_validation->set_message('valid_password', 'The {field} field must be at least one lowercase letter.');
			return FALSE;
		}
		//If the password does not contain atleast a upper case letter the message is to be shown as an indication and returns false
		if(preg_match_all($regex_uppercase, $password) < 1){
			$this->form_validation->set_message('valid_password', 'The {field} field must be at least one uppercase letter.');
			return FALSE;
		}
        //If the password does not contain atleast a number the message is to be shown as an indication and returns false
		if(preg_match_all($regex_number, $password) < 1){
			$this->form_validation->set_message('valid_password', 'The {field} field must have at least one number.');
			return FALSE;
		}
        //If the password does not contain atleast a special character the message is to be shown as an indication and returns false
		if(preg_match_all($regex_special, $password) < 1){
			$this->form_validation->set_message('valid_password', 'The {field} field must have at least one special character.' . ' ' . htmlentities ('!@#$%^&*()\-_=+{};:,<.>ยง~'));
			return FALSE;
		}
       //If the password does not contain 5 character the message is to be shown as an indication and returns false
		if(strlen($password) < 5){
			$this->form_validation->set_message('valid_password', 'The {field} field must be at least 5 characters in length.');
			return FALSE;
		}
        //If the execeeds 32 characters the message is to be shown as an indication and returns false
		if(strlen($password) > 32){
			$this->form_validation->set_message('valid_password', 'The {field} field cannot exceed 32 characters in length.');
			return FALSE;
		}
		//If it satisfies the all the condition it returns true
		return TRUE;
	}
}
?>
			
			
			
					  