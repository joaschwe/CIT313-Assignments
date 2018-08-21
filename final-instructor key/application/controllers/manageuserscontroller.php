<?php

	class ManageUsersController extends Controller{

		protected $access = 1;
		public $user;

		public function index(){

			$this->user = new Users();
			$outcome = $this->user->showUsers();
			$this->set('users',$outcome);
		}

		public function delete($uID){
			$this->user = new Users();
			$outcome = $this->user->deleteUser($uID);
			$outcome = $this->user->showUsers();
			$this->set('users',$outcome);

			if($outcome){
				$this->set('message', "User deleted.");
			}
		}

		public function approve($uID){
			$this->user = new Users();
			$outcome = $this->user->approveUser($uID);
			$outcome = $this->user->showUsers();
			$this->set('users',$outcome);

			if($outcome){
				$this->set('message', "User approved.");
			}
		}

	}