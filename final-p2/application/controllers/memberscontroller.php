<?php
class MembersController extends Controller{
	
	public $userObject;
  
   	public function users($uID){
		$this->userObject = new Users();
		$user = $this->userObject->getUser($uID);	    
	  	$this->set('user',$user);
   	}
	
	public function index(){
		$this->userObject = new Users();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'The Members View');
		$this->set('users',$users);
		$this->set('first_name',$first_name);
		$this->set('last_name',$last_name);
		$this->set('email',$email);
	}

	public function profile($uID) {
        $this->userObject = new Users();
        $user = $this->userObject->getUser($uID);
//        $this->getCategories();

        $this->set('uID', $user['uID']);
        $this->set('first_name', $user['first_name']);
        $this->set('last_name', $user['last_name']);
        $this->set('email', $user['email']);
        $this->set('password', $user['password']);
        $this->set('task', 'update');
    }

    public function update($uID){
        $data = array('uID'=>$_POST['uID'],'first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],
            'email'=>$_POST['email'],'password'=>$_POST['password']);
        $this->userObject = new Users();

        $result = $this->userObject->updateUser($uID);
        $outcome = $this->userObject->getAllUsers();
        $this->set('users',$outcome);
        $this->set('message', $result);
//        $this->getCategories();
        $this->set('task', 'update');
    }
	
}
?>