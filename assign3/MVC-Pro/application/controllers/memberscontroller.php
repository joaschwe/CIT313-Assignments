<?php

class MembersController extends Controller{
	
	public $usersObject;
   
   	public function view($uID){
	   
		$this->usersObject = new Users();
		$user = $this->usersObject->getUser($uID);
	  	$this->set('user',$user);
	   
   	}
	
	public function defaultTask(){
		
		$this->usersObject = new Users();
		$users = $this->usersObject->getAllUsers();
		$this->set('title', 'The Members View');
		$this->set('users',$users);
	
	}
	
	
}
