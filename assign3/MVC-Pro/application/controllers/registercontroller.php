<?php

class RegisterController extends Controller{
	
	public $usersObject;
	
	public function defaultTask(){
		
		$this->usersObject = new Users();
		$this->set('task', 'add');
	
	
	}
	
	public function add(){
		
			$this->usersObject = new Users();
			
			$data = array('fname'=>$_POST['register_first_name'], 'lname'=>$_POST['register_last_name'], 'email'=>$_POST['register_email'], 'password'=>$_POST['register_password']);
			
	
			$result = $this->usersObject->addUser($data);
			
			$this->set('message', $result);
			
		
	}
	
//	public function edit($pID){
//
//			$this->userObject = new Users();
//
//			$post = $this->userObject->getPost($pID);
//
//			$this->set('pID', $post['pID']);
//			$this->set('title', $post['title']);
//			$this->set('content', $post['content']);
//			$this->set('task', 'update');
//
//
//	}
	
	
}
